<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Cache;
use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Storage;

$googleScriptUrl = config('experiment.google_script_url');

$designs = collect(config('experiment.designs', []))
    ->filter(function (array $design) {
        return isset($design['images']['en'], $design['images']['ar'])
            && file_exists(public_path($design['images']['en']))
            && file_exists(public_path($design['images']['ar']));
    })
    ->values()
    ->all();

Route::get('/', function () use ($designs) {
    $lang = request()->query('lang', 'en');

    if (! in_array($lang, ['en', 'ar'], true)) {
        $lang = 'en';
    }

    return view('welcome', [
        'lang' => $lang,
        'availableDesignCount' => count($designs),
        'configuredDesignCount' => count(config('experiment.designs', [])),
    ]);
})->name('presurvey');

Route::post('/presurvey/start', function (Request $request) use ($designs) {
    if (count($designs) === 0) {
        return back()->withErrors([
            'designs' => 'No complete experiment designs are available yet. Add matching English and Arabic images first.',
        ]);
    }

    $lang = $request->input('lang', 'en');
    if (! in_array($lang, ['en', 'ar'], true)) {
        $lang = 'en';
    }

    $validated = $request->validate([
        'age_range' => ['required', 'in:18-24,25-34,35-44,45-54,55+'],
        'gender' => ['required', 'in:female,male'],
        'field_of_study' => ['required', 'in:it,engineering,business,law,medicine,other'],
        'is_18_plus' => ['accepted'],
        'consent' => ['accepted'],
    ]);

    $counterKey = 'experiment.design_counter';
    $counter = Cache::get($counterKey);

    if (! is_int($counter) || $counter < 0) {
        $counter = 0;
    }

    $counter++;
    Cache::forever($counterKey, $counter);

    $designIndex = ($counter - 1) % count($designs);
    $assignedDesign = $designs[$designIndex];

    $request->session()->put('presurvey', [
        'age_range' => $validated['age_range'],
        'gender' => $validated['gender'],
        'field_of_study' => $validated['field_of_study'],
        'consent_at' => now()->toIso8601String(),
        'lang' => $lang,
        'design_id' => $assignedDesign['id'],
    ]);

    return redirect()
        ->route('experiment.show', ['lang' => $lang, 'design' => $assignedDesign['id']]);
})->name('presurvey.start');

Route::get('/experiment', function (Request $request) use ($designs) {
    if (count($designs) === 0) {
        return redirect()->route('presurvey', ['lang' => $request->query('lang', 'en')]);
    }

    $presurvey = $request->session()->get('presurvey');
    $completed = $request->session()->get('completed_experiment');

    $lang = $request->query('lang', $presurvey['lang'] ?? $completed['lang'] ?? 'en');
    if (! in_array($lang, ['en', 'ar'], true)) {
        $lang = 'en';
    }

    if (! $presurvey && ! $completed) {
        return redirect()->route('presurvey', ['lang' => $lang]);
    }

    $designId = $request->query('design', $presurvey['design_id'] ?? $completed['design_id'] ?? $designs[0]['id']);
    $design = collect($designs)->firstWhere('id', $designId);

    if (! $design) {
        abort(404);
    }

    return view('experiment', [
        'lang' => $lang,
        'design' => $design,
        'submissionStatus' => session('submission_status'),
        'completedExperiment' => $completed,
    ]);
})->name('experiment.show');

Route::post('/experiment/submit', function (Request $request) use ($designs, $googleScriptUrl) {
    if (count($designs) === 0) {
        return redirect()->route('presurvey', ['lang' => $request->input('lang', 'en')]);
    }

    $presurvey = $request->session()->get('presurvey');

    if (! $presurvey) {
        return redirect()->route('presurvey', ['lang' => $request->input('lang', 'en')]);
    }

    $lang = $request->input('lang', $presurvey['lang'] ?? 'en');
    if (! in_array($lang, ['en', 'ar'], true)) {
        $lang = 'en';
    }

    $validated = $request->validate([
        'design_id' => ['required', 'string'],
        'response_action' => ['required', 'in:accept,reject,leave'],
        'honest_data' => ['required', 'integer', 'between:1,5'],
        'cares_interests' => ['required', 'integer', 'between:1,5'],
        'deceptive_banner' => ['required', 'integer', 'between:1,5'],
        'reason' => ['required', 'string', 'max:4000'],
    ]);

    $design = collect($designs)->firstWhere('id', $validated['design_id']);

    if (! $design) {
        return back()->withErrors(['design_id' => 'Unknown design selected.'])->withInput();
    }

    $payload = [
        'submitted_at' => now()->toIso8601String(),
        'language' => $lang,
        'design_id' => $design['id'],
        'design_name' => $design['name'],
        'age_range' => $presurvey['age_range'],
        'gender' => $presurvey['gender'],
        'field_of_study' => $presurvey['field_of_study'],
        'response_action' => $validated['response_action'],
        'honest_data' => $validated['honest_data'],
        'cares_interests' => $validated['cares_interests'],
        'deceptive_banner' => $validated['deceptive_banner'],
        'reason' => $validated['reason'],
        'consent_at' => $presurvey['consent_at'],
    ];

    Storage::append('experiment-submissions.jsonl', json_encode($payload, JSON_UNESCAPED_UNICODE));

    $submissionStatus = 'local_only';

    try {
        $response = Http::asForm()
            ->timeout(15)
            ->post($googleScriptUrl, $payload);

        if ($response->successful() && ! str_contains($response->body(), 'doPost')) {
            $submissionStatus = 'google_sheet';
        }
    } catch (\Throwable $exception) {
        report($exception);
    }

    $request->session()->put('completed_experiment', [
        'lang' => $lang,
        'design_id' => $design['id'],
    ]);
    $request->session()->forget('presurvey');

    return redirect()
        ->route('experiment.show', ['lang' => $lang, 'design' => $design['id']])
        ->with('submission_status', $submissionStatus);
})->name('experiment.submit');
