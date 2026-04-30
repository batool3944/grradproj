@php
    $isArabic = ($lang ?? 'en') === 'ar';

    $copy = $isArabic
        ? [
            'html_lang' => 'ar',
            'dir' => 'rtl',
            'title' => 'شكراً لك',
            'brand' => 'التجربة',
            'lang_en_url' => route('experiment.thankyou', ['lang' => 'en']),
            'lang_ar_url' => route('experiment.thankyou', ['lang' => 'ar']),
            'eyebrow' => 'اكتملت المشاركة',
            'heading' => 'شكراً لك على مشاركتك',
            'body' => 'تم استلام إجابتك بنجاح.',
            'local_status' => 'تم حفظ الإجابة محلياً داخل المشروع، لكن رابط Google Apps Script الحالي ما زال يحتاج إلى دالة doPost ليعمل الإرسال المباشر إلى الجدول.',
            'endpoint_note' => 'تم الاحتفاظ بنسخة احتياطية محلية لأن نقطة النهاية الحالية تُرجع خطأ متعلقاً بـ doPost.',
        ]
        : [
            'html_lang' => 'en',
            'dir' => 'ltr',
            'title' => 'Thank You',
            'brand' => 'Experiment',
            'lang_en_url' => route('experiment.thankyou', ['lang' => 'en']),
            'lang_ar_url' => route('experiment.thankyou', ['lang' => 'ar']),
            'eyebrow' => 'Participation Complete',
            'heading' => 'Thank you for participating',
            'body' => 'Your response has been received successfully.',
            'local_status' => 'The response was saved locally in the project, but the current Google Apps Script URL still needs a doPost function before direct sheet submission can work.',
            'endpoint_note' => 'A local backup was kept because the current endpoint returns a doPost-related error.',
        ];
@endphp
<!DOCTYPE html>
<html lang="{{ $copy['html_lang'] }}" dir="{{ $copy['dir'] }}">
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
                --ink: #0b1627;
                --muted: #23364f;
                --line: rgba(81,114,149,.18);
                --accent: #1f67ff;
                --accent-soft: #e9f0ff;
                --success: #19805e;
                --warning: #8a5335;
                --warning-soft: #fff4e8;
                --shadow: 0 24px 70px rgba(68,92,132,.16);
                --radius-xl: 28px;
                --radius-lg: 20px;
            }

            * { box-sizing: border-box; }
            body {
                margin: 0;
                min-height: 100vh;
                color: var(--ink);
                font-family: {{ $isArabic ? '"Noto Sans Arabic", sans-serif' : '"Manrope", sans-serif' }};
                background:
                    radial-gradient(circle at top left, rgba(255,255,255,.88), rgba(255,255,255,0) 28%),
                    radial-gradient(circle at bottom right, rgba(31,103,255,.12), rgba(31,103,255,0) 34%),
                    linear-gradient(160deg, #dbe6ff 0%, #d7e2fb 45%, #edf3ff 100%);
            }

            .page-shell { width: min(960px, calc(100% - 24px)); margin: 0 auto; padding: 24px 0 40px; }
            .topbar, .lang-switcher, .brand { display: flex; align-items: center; }
            .topbar { justify-content: space-between; gap: 16px; margin-bottom: 18px; }
            .brand, .lang-switcher { background: rgba(255,255,255,.75); border: 1px solid rgba(255,255,255,.65); box-shadow: 0 16px 30px rgba(68,92,132,.12); border-radius: 999px; }
            .brand { gap: 10px; padding: 10px 14px; font-size: .92rem; font-weight: 800; }
            .brand-dot { width: 10px; height: 10px; border-radius: 999px; background: linear-gradient(135deg, var(--success), #2ea77e); }
            .lang-switcher { gap: 8px; padding: 8px; }
            .lang-link { min-height: 42px; padding: 10px 16px; border-radius: 999px; text-decoration: none; color: var(--muted); font-weight: 800; }
            .lang-link.active { background: var(--ink); color: #fff; }
            .panel {
                background: var(--panel);
                border: 1px solid rgba(255,255,255,.66);
                border-radius: var(--radius-xl);
                box-shadow: var(--shadow);
                backdrop-filter: blur(18px);
                padding: 28px;
            }
            .eyebrow {
                display: inline-flex;
                padding: 8px 14px;
                border-radius: 999px;
                background: var(--accent-soft);
                color: var(--accent);
                font-size: .9rem;
                font-weight: 800;
            }
            h1, p { margin: 0; }
            .title { margin-top: 18px; font-size: clamp(2rem, 4vw, 3.2rem); line-height: 1.05; letter-spacing: -.04em; }
            .copy { margin-top: 16px; color: var(--muted); line-height: 1.85; }
            .status {
                margin-top: 22px;
                padding: 16px 18px;
                border-radius: 18px;
                font-weight: 800;
            }
            .status.success { background: #e8fbf4; color: #0f6b51; border: 1px solid rgba(15,107,81,.18); }
            .status.warning { background: var(--warning-soft); color: var(--warning); border: 1px solid rgba(138,83,53,.16); }
            .meta {
                margin-top: 18px;
                display: inline-flex;
                padding: 10px 14px;
                border-radius: 999px;
                background: #fff;
                border: 1px solid var(--line);
                font-size: .92rem;
                font-weight: 800;
            }
            @media (max-width: 640px) {
                .page-shell { width: min(100% - 16px, 100%); padding: 16px 0 28px; }
                .topbar { flex-direction: column; align-items: stretch; }
                .panel { padding: 20px; }
                .lang-link { width: 100%; }
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

            <section class="panel">
                <div class="eyebrow">{{ $copy['eyebrow'] }}</div>
                <h1 class="title">{{ $copy['heading'] }}</h1>
                <p class="copy">{{ $copy['body'] }}</p>

                @if ($submissionStatus && $submissionStatus !== 'google_sheet')
                    <div class="status warning">{{ $copy['local_status'] }}</div>
                    <p class="copy">{{ $copy['endpoint_note'] }}</p>
                @endif

            </section>
        </div>
    </body>
</html>
