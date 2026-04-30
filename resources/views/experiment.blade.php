@php
    $isArabic = ($lang ?? 'en') === 'ar';

    $copy = $isArabic
        ? [
            'title' => 'التجربة',
            'brand' => 'التجربة',
            'lang_en_url' => route('experiment.show', ['lang' => 'en', 'design' => $design['id']]),
            'lang_ar_url' => route('experiment.show', ['lang' => 'ar', 'design' => $design['id']]),
            'scenario_title' => 'السيناريو',
            'scenario_body' => 'تخيل أنك تقوم بزيارة منصة تعليمية عبر الإنترنت تتيح للأشخاص تدريس وتعلم الدورات من أي مكان في العالم. عند فتحك للموقع لأول مرة، تظهر لافتة لملفات تعريف الارتباط تطلب موافقتك على استخدام هذه الملفات. يرجى اختيار الإجراء الذي يُرجّح أن تقوم به في هذا الموقف.',
            'response_title' => 'ما الإجراء الذي ستتخذه تجاه لافتة ملفات تعريف الارتباط هذه؟',
            'response_options' => [
                'accept' => 'قبول',
                'reject' => 'رفض',
                'leave' => 'أغادر الموقع',
            ],
            'likert_title' => 'يرجى تحديد مدى موافقتك على العبارات التالية',
            'statements' => [
                'honest_data' => 'أعتقد أن هذا الموقع سيتعامل بصدق مع بياناتي الشخصية.',
                'cares_interests' => 'يشير تصميم هذا الموقع إلى أنه يهتم بمصالح المستخدمين.',
                'deceptive_banner' => 'أشعر أن هذه اللافتة تحاول خداعي للموافقة على ملفات تعريف الارتباط.',
            ],
            'likert_options' => [
                1 => 'غير موافق بشدة',
                2 => 'غير موافق',
                3 => 'محايد',
                4 => 'موافق',
                5 => 'موافق بشدة',
            ],
            'reason_title' => 'ما السبب الذي دفعك لاختيار هذا الإجراء؟ (الموافقة، الرفض، أو مغادرة الموقع)',
            'reason_placeholder' => 'اكتب السبب هنا...',
            'submit' => 'إرسال الإجابة',
            'back' => 'العودة إلى الاستبيان التمهيدي',
            'required_note' => 'جميع الأسئلة في هذه الصفحة إلزامية.',
            'submit_incomplete' => 'يرجى الإجابة على جميع الأسئلة قبل إرسال النموذج.',
            'submit_ready' => 'تمت الإجابة على جميع الأسئلة ويمكنك الآن الإرسال.',
            'thanks_title' => 'تم استلام الإجابة',
            'thanks_body_local' => 'تم حفظ الإجابة محليًا داخل المشروع، لكن رابط Google Apps Script الحالي لا يزال بحاجة إلى دالة doPost ليتم الإرسال إلى الجدول مباشرة.',
            'endpoint_note' => 'الرابط الحالي يعيد خطأ doPost، لذلك تم حفظ نسخة احتياطية محليًا.',
        ]
        : [
            'title' => 'Experiment',
            'brand' => 'Experiment',
            'lang_en_url' => route('experiment.show', ['lang' => 'en', 'design' => $design['id']]),
            'lang_ar_url' => route('experiment.show', ['lang' => 'ar', 'design' => $design['id']]),
            'scenario_title' => 'Scenario',
            'scenario_body' => 'Imagine you are visiting an online learning platform that allows people to teach and learn courses from anywhere in the world. As you open the website for the first time, a cookie banner appears asking for your consent to use cookies. Please select what you would most likely do in that situation.',
            'response_title' => 'How would you respond to this cookie banner?',
            'response_options' => [
                'accept' => 'Accept',
                'reject' => 'Reject',
                'leave' => 'Leave the website',
            ],
            'likert_title' => 'Please indicate your agreement with the statements below',
            'statements' => [
                'honest_data' => 'I believe this website would be honest in handling my personal data.',
                'cares_interests' => 'This website design suggests it cares about my best interests.',
                'deceptive_banner' => 'I feel this banner is trying to deceive me into accepting cookies.',
            ],
            'likert_options' => [
                1 => 'Strongly disagree',
                2 => 'Disagree',
                3 => 'Neutral',
                4 => 'Agree',
                5 => 'Strongly agree',
            ],
            'reason_title' => 'What made you choose this answer? (accept, reject, leave the website)',
            'reason_placeholder' => 'Write your reason here...',
            'submit' => 'Submit Answer',
            'back' => 'Back to Pre-Survey',
            'required_note' => 'All questions on this page are required.',
            'submit_incomplete' => 'Please answer every question before submitting the form.',
            'submit_ready' => 'All required questions are answered. You can submit now.',
            'thanks_title' => 'Response received',
            'thanks_body_local' => 'The response was saved locally in the project, but the current Google Apps Script URL still needs a doPost function before direct sheet submission can work.',
            'endpoint_note' => 'The current endpoint returns a doPost error, so a local backup was saved.',
        ];

    $imagePath = asset($design['images'][$lang] ?? $design['images']['en']);
@endphp
<!DOCTYPE html>
<html lang="{{ $isArabic ? 'ar' : 'en' }}" dir="{{ $isArabic ? 'rtl' : 'ltr' }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>{{ $copy['title'] }}</title>
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Manrope:wght@400;500;600;700;800&family=Noto+Sans+Arabic:wght@400;500;600;700;800&display=swap" rel="stylesheet">
        <style>
            :root {
                --bg: #e6efff;
                --panel: rgba(255,255,255,.9);
                --panel-strong: #fff;
                --ink: #18324e;
                --muted: #617a94;
                --line: rgba(81,114,149,.18);
                --accent: #1f67ff;
                --accent-soft: #e9f0ff;
                --success: #19805e;
                --warning: #8a5335;
                --warning-soft: #fff4e8;
                --shadow: 0 24px 70px rgba(68,92,132,.16);
                --radius-xl: 28px;
                --radius-lg: 20px;
                --radius-md: 16px;
            }

            * { box-sizing: border-box; }
            body {
                margin: 0;
                min-height: 100vh;
                color: var(--ink);
                font-family: {{ $isArabic ? '"Noto Sans Arabic", sans-serif' : '"Manrope", sans-serif' }};
                background:
                    radial-gradient(circle at top left, rgba(255,255,255,.88), rgba(255,255,255,0) 28%),
                    linear-gradient(160deg, #dbe6ff 0%, #d7e2fb 45%, #edf3ff 100%);
            }

            .page-shell { width: min(1120px, calc(100% - 24px)); margin: 0 auto; padding: 24px 0 40px; }
            .topbar, .lang-switcher, .brand { display: flex; align-items: center; }
            .topbar { justify-content: space-between; gap: 16px; margin-bottom: 18px; }
            .brand, .lang-switcher { background: rgba(255,255,255,.75); border: 1px solid rgba(255,255,255,.65); box-shadow: 0 16px 30px rgba(68,92,132,.12); border-radius: 999px; }
            .brand { gap: 10px; padding: 10px 14px; font-size: .92rem; font-weight: 800; }
            .brand-dot { width: 10px; height: 10px; border-radius: 999px; background: linear-gradient(135deg, var(--success), #2ea77e); }
            .lang-switcher { gap: 8px; padding: 8px; }
            .lang-link { min-height: 42px; padding: 10px 16px; border-radius: 999px; text-decoration: none; color: var(--muted); font-weight: 800; }
            .lang-link.active { background: var(--ink); color: #fff; }
            .panel { background: var(--panel); border: 1px solid rgba(255,255,255,.66); border-radius: var(--radius-xl); box-shadow: var(--shadow); backdrop-filter: blur(18px); padding: 24px; }
            .hero { display: grid; grid-template-columns: 1.04fr .96fr; gap: 24px; align-items: start; }
            .eyebrow { display: inline-flex; padding: 8px 14px; border-radius: 999px; background: var(--accent-soft); color: var(--accent); font-size: .9rem; font-weight: 800; }
            h1,h2,h3,p { margin: 0; }
            .title { margin-top: 18px; font-size: clamp(1.9rem, 4vw, 3rem); line-height: 1.05; letter-spacing: -.04em; }
            .copy { margin-top: 16px; color: var(--muted); line-height: 1.85; }
            .meta { margin-top: 20px; display: inline-flex; padding: 10px 14px; border-radius: 999px; background: #fff; border: 1px solid var(--line); font-size: .92rem; font-weight: 800; }
            .stimulus-card { background: rgba(255,255,255,.78); border: 1px solid var(--line); border-radius: var(--radius-lg); padding: 18px; }
            .stimulus-card strong { display: block; margin-bottom: 12px; font-size: 1rem; }
            .stimulus-shot { width: 100%; display: block; border-radius: 18px; border: 1px solid rgba(73,97,122,.1); box-shadow: 0 16px 28px rgba(68,92,132,.12); object-fit: contain; }
            .survey-panel { margin-top: 24px; }
            .section-title { font-size: 1.3rem; margin-bottom: 14px; letter-spacing: -.02em; }
            .response-grid, .likert-block, .likert-grid, .actions { display: grid; gap: 14px; }
            .response-grid { grid-template-columns: repeat(3, minmax(0,1fr)); margin-top: 18px; }
            .option { position: relative; }
            .option input, .likert-cell input { position: absolute; opacity: 0; pointer-events: none; }
            .option label {
                display: flex; align-items: center; justify-content: center; min-height: 74px; padding: 16px; border-radius: 18px; border: 1px solid rgba(86,111,138,.18); background: rgba(255,255,255,.96); font-weight: 800; cursor: pointer; transition: transform .18s ease, box-shadow .18s ease, border-color .18s ease;
            }
            .option input:checked + label, .likert-cell input:checked + label {
                border-color: rgba(31,103,255,.34); box-shadow: 0 12px 22px rgba(31,103,255,.1); transform: translateY(-1px);
            }
            .likert-block { margin-top: 28px; }
            .likert-row {
                background: rgba(255,255,255,.8);
                border: 1px solid var(--line);
                border-radius: var(--radius-lg);
                padding: 18px;
            }
            .statement { font-weight: 700; line-height: 1.8; margin-bottom: 14px; }
            .likert-grid { grid-template-columns: repeat(5, minmax(0,1fr)); }
            .likert-cell { position: relative; }
            .likert-cell label {
                display: block; min-height: 84px; padding: 12px; border-radius: 16px; border: 1px solid rgba(86,111,138,.18); background: rgba(255,255,255,.96); text-align: center; font-size: .9rem; font-weight: 700; line-height: 1.55; cursor: pointer;
            }
            textarea {
                width: 100%; min-height: 150px; padding: 16px 18px; resize: vertical; border-radius: 18px; border: 1px solid rgba(86,111,138,.18); background: rgba(255,255,255,.96); color: var(--ink); font: inherit; outline: none;
            }
            .hint { color: var(--muted); line-height: 1.8; margin-top: 8px; }
            .flash { margin-bottom: 18px; padding: 16px 18px; border-radius: 18px; font-weight: 800; }
            .flash.success { background: #e8fbf4; color: #0f6b51; border: 1px solid rgba(15,107,81,.18); }
            .flash.warning { background: var(--warning-soft); color: var(--warning); border: 1px solid rgba(138,83,53,.16); }
            .actions { margin-top: 24px; grid-template-columns: 1fr auto; align-items: center; }
            .btn {
                display: inline-flex; align-items: center; justify-content: center; min-height: 56px; padding: 14px 22px; border-radius: 999px; border: 1px solid transparent; text-decoration: none; font: inherit; font-weight: 800; cursor: pointer;
            }
            .btn-primary { color: #fff; background: linear-gradient(135deg, #1f67ff 0%, #4f89ff 100%); box-shadow: 0 12px 24px rgba(31,103,255,.2); }
            .btn-secondary { background: #fff; color: var(--ink); border-color: rgba(81,105,127,.24); }
            .stack { display: grid; gap: 18px; }

            @media (max-width: 920px) {
                .hero, .response-grid, .actions { grid-template-columns: 1fr; }
                .likert-grid { grid-template-columns: repeat(2, minmax(0,1fr)); }
            }

            @media (max-width: 640px) {
                .page-shell { width: min(100% - 16px, 100%); padding: 16px 0 28px; }
                .topbar { flex-direction: column; align-items: stretch; }
                .panel { padding: 18px; }
                .title { font-size: 1.9rem; line-height: 1.12; }
                .copy { font-size: .98rem; line-height: 1.75; }
                .response-grid { grid-template-columns: 1fr; }
                .likert-grid { grid-template-columns: 1fr; }
                .likert-cell label { min-height: auto; padding: 14px; }
                .stimulus-card { padding: 14px; }
                .stimulus-shot { max-height: 72vh; }
                textarea { min-height: 130px; }
                .lang-link, .btn { width: 100%; }
            }
        </style>
    </head>
    <body>
        <div class="page-shell">
            <div class="topbar">
                <div class="brand">
                    <span class="brand-dot"></span>
                    <span>{{ $copy['brand'] }}</span>
                </div>
                <div class="lang-switcher">
                    <a class="lang-link {{ $isArabic ? '' : 'active' }}" href="{{ $copy['lang_en_url'] }}">English</a>
                    <a class="lang-link {{ $isArabic ? 'active' : '' }}" href="{{ $copy['lang_ar_url'] }}">العربية</a>
                </div>
            </div>

            @if ($submissionStatus)
                <div class="panel stack">
                    <div class="flash success">{{ $copy['thanks_title'] }}</div>
                    @if ($submissionStatus !== 'google_sheet')
                        <div class="flash warning">{{ $copy['thanks_body_local'] }}</div>
                        <p class="hint">{{ $copy['endpoint_note'] }}</p>
                    @endif
                    <div>
                        <a class="btn btn-secondary" href="{{ route('presurvey', ['lang' => $lang]) }}">{{ $copy['back'] }}</a>
                    </div>
                </div>
            @else
                <div class="hero">
                    <section class="panel">
                        <div class="eyebrow">{{ $copy['scenario_title'] }}</div>
                        <h1 class="title">{{ $copy['response_title'] }}</h1>
                        <p class="copy">{{ $copy['scenario_body'] }}</p>
                    </section>

                    <aside class="stimulus-card">
                        <strong>{{ $design['name'] }}</strong>
                        <img class="stimulus-shot" src="{{ $imagePath }}" alt="{{ $design['name'] }}">
                    </aside>
                </div>

                <form class="panel survey-panel" method="POST" action="{{ route('experiment.submit') }}">
                    @csrf
                    <input type="hidden" name="lang" value="{{ $lang }}">
                    <input type="hidden" name="design_id" value="{{ $design['id'] }}">

                    <section>
                        <h2 class="section-title">{{ $copy['response_title'] }}</h2>
                        <p class="hint">{{ $copy['required_note'] }}</p>
                        <div class="response-grid">
                            @foreach ($copy['response_options'] as $value => $label)
                                <div class="option">
                                    <input id="response_{{ $value }}" type="radio" name="response_action" value="{{ $value }}" @checked(old('response_action') === $value) required>
                                    <label for="response_{{ $value }}">{{ $label }}</label>
                                </div>
                            @endforeach
                        </div>
                    </section>

                    <section class="likert-block">
                        <h2 class="section-title">{{ $copy['likert_title'] }}</h2>

                        @foreach ($copy['statements'] as $field => $statement)
                            <div class="likert-row">
                                <div class="statement">{{ $statement }}</div>
                                <div class="likert-grid">
                                    @foreach ($copy['likert_options'] as $value => $label)
                                        <div class="likert-cell">
                                            <input id="{{ $field }}_{{ $value }}" type="radio" name="{{ $field }}" value="{{ $value }}" @checked((string) old($field) === (string) $value) required>
                                            <label for="{{ $field }}_{{ $value }}">{{ $label }}</label>
                                        </div>
                                    @endforeach
                                </div>
                            </div>
                        @endforeach
                    </section>

                    <section class="likert-block">
                        <h2 class="section-title">{{ $copy['reason_title'] }}</h2>
                        <textarea name="reason" placeholder="{{ $copy['reason_placeholder'] }}" required>{{ old('reason') }}</textarea>
                    </section>

                    <div class="actions">
                        <div class="hint" id="submit-status">{{ $copy['submit_incomplete'] }}</div>
                        <a class="btn btn-secondary" href="{{ route('presurvey', ['lang' => $lang]) }}">{{ $copy['back'] }}</a>
                        <button class="btn btn-primary" id="survey-submit-button" type="submit" disabled>{{ $copy['submit'] }}</button>
                    </div>
                </form>
            @endif
        </div>

        @if (! $submissionStatus)
            <script>
                const experimentForm = document.querySelector('form[action="{{ route('experiment.submit') }}"]');
                const responseActionInputs = Array.from(document.querySelectorAll('input[name="response_action"]'));
                const likertNames = ['honest_data', 'cares_interests', 'deceptive_banner'];
                const reasonField = document.querySelector('textarea[name="reason"]');
                const submitButton = document.getElementById('survey-submit-button');
                const submitStatus = document.getElementById('submit-status');
                const submitIncomplete = @json($copy['submit_incomplete']);
                const submitReady = @json($copy['submit_ready']);

                function experimentFormReady() {
                    const actionAnswered = responseActionInputs.some((input) => input.checked);
                    const likertAnswered = likertNames.every((name) => {
                        return document.querySelector(`input[name="${name}"]:checked`);
                    });
                    const reasonAnswered = Boolean(reasonField.value.trim());

                    return actionAnswered && likertAnswered && reasonAnswered;
                }

                function updateExperimentSubmitState() {
                    const ready = experimentFormReady();
                    submitButton.disabled = !ready;
                    submitStatus.textContent = ready ? submitReady : submitIncomplete;
                }

                experimentForm.addEventListener('input', updateExperimentSubmitState);
                experimentForm.addEventListener('change', updateExperimentSubmitState);
                updateExperimentSubmitState();
            </script>
        @endif
    </body>
</html>
