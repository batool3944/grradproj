@php
    $isArabic = ($lang ?? 'en') === 'ar';

    $copy = $isArabic
        ? [
            'html_lang' => 'ar',
            'dir' => 'rtl',
            'title' => 'دراسة الثقة في لافتات ملفات تعريف الارتباط',
            'brand' => 'دراسة الثقة في لافتات ملفات تعريف الارتباط',
            'lang_primary' => 'العربية',
            'lang_secondary' => 'English',
            'lang_primary_url' => route('presurvey', ['lang' => 'ar']),
            'lang_secondary_url' => route('presurvey', ['lang' => 'en']),
            'welcome_eyebrow' => 'مسار الاستبيان التمهيدي',
            'welcome_title' => 'دراسة تأثير تصميم لافتات ملفات تعريف الارتباط على ثقة المستخدمين ومصداقية المواقع الإلكترونية',
            'welcome_body' => 'تهدف هذه الدراسة إلى فهم كيف تؤثر لافتات ملفات تعريف الارتباط على الانطباع الأول للمستخدم وثقته بالموقع الإلكتروني. ستنتقل عبر عدة شاشات قصيرة، تشاهد أمثلة للافتات الكوكيز، ثم تجيب عن أسئلة مختصرة. جميع الإجابات مجهولة الهوية وتستخدم لأغراض أكاديمية فقط.',
            'next' => 'التالي',
            'definitions_eyebrow' => 'التعريفات',
            'definitions_title' => 'ملفات تعريف الارتباط ولافتات الكوكيز',
            'cookie_title' => 'ملف تعريف الارتباط',
            'cookie_body' => 'هو ملف نصي صغير يخزنه الموقع الإلكتروني على جهاز المستخدم لتذكر معلومات من زيارات سابقة، مثل بيانات تسجيل الدخول والتفضيلات والنشاط.',
            'banner_title' => 'لافتة ملفات تعريف الارتباط',
            'banner_body' => 'هي إشعار يظهر على صفحة الويب، غالبًا في الأعلى أو الوسط أو الأسفل، لإبلاغ المستخدمين باستخدام الكوكيز وطلب اختيارهم للموافقة.',
            'back' => 'رجوع',
            'survey_eyebrow' => 'بيانات المشارك',
            'survey_title' => 'أسئلة تمهيدية قصيرة',
            'survey_body' => 'يرجى الإجابة عن هذه الأسئلة الأساسية وتأكيد الموافقة قبل الانتقال إلى صفحة التعريفات.',
            'age_label' => 'ما هو عمرك؟',
            'age_placeholder' => 'اختر الفئة العمرية',
            'ages' => ['18-24' => '18-24', '25-34' => '25-34', '35-44' => '35-44', '45-54' => '45-54', '55+' => '55+'],
            'gender_label' => 'ما هو جنسك؟',
            'gender_female' => 'أنثى',
            'gender_male' => 'ذكر',
            'field_label' => 'ما هو تخصصك الدراسي؟',
            'field_placeholder' => 'اختر التخصص',
            'fields' => [
                'it' => 'تقنية المعلومات',
                'engineering' => 'الهندسة',
                'business' => 'إدارة الأعمال',
                'law' => 'القانون',
                'medicine' => 'الطب',
                'other' => 'آخر',
            ],
            'screening_incomplete' => 'أكمل الأسئلة الثلاثة وحدد الموافقة للمتابعة.',
            'screening_underage' => 'هذه الدراسة مخصصة للمشاركين الذين تبلغ أعمارهم 18 سنة أو أكثر.',
            'screening_ready' => 'تمت الإجابة على الأسئلة الأساسية ويمكنك المتابعة.',
            'consent_eyebrow' => 'الموافقة والأهلية',
            'consent_title' => 'أكد مشاركتك قبل بدء التجربة',
            'age_confirm' => 'أؤكد أن عمري 18 سنة أو أكثر.',
            'consent_confirm' => 'أوافق طوعًا على المشاركة في هذه الدراسة الأكاديمية.',
            'consent_detail' => 'إجاباتي مجهولة الهوية وتستخدم للأغراض الأكاديمية فقط.',
            'consent_underage' => 'هذه الدراسة مخصصة للمشاركين الذين تبلغ أعمارهم 18 سنة أو أكثر.',
            'continue_notice' => 'يرجى إكمال جميع الأسئلة المطلوبة وتأكيد الموافقة قبل المتابعة.',
            'start' => 'ابدأ التجربة',
            'success' => 'تم تسجيل الاستبيان التمهيدي، والمشارك مؤهل للمتابعة إلى التجربة.',
            'error' => 'يرجى مراجعة الحقول المطلوبة قبل المتابعة.',
        ]
        : [
            'html_lang' => 'en',
            'dir' => 'ltr',
            'title' => 'Cookie Banner Trust Study',
            'brand' => 'Cookie Banner Trust Study',
            'lang_primary' => 'English',
            'lang_secondary' => 'العربية',
            'lang_primary_url' => route('presurvey', ['lang' => 'en']),
            'lang_secondary_url' => route('presurvey', ['lang' => 'ar']),
            'welcome_eyebrow' => 'Pre-Survey Flow',
            'welcome_title' => 'Investigating the Impact of Cookie Banner Interface Design on User Trust and Perceptions of Website Credibility',
            'welcome_body' => 'This study explores how cookie banners shape first impressions of trust and website credibility. You will move through a few short screens, review sample cookie banners, and answer brief questions. All responses are anonymous and used for academic research only.',
            'next' => 'Next',
            'definitions_eyebrow' => 'Definitions',
            'definitions_title' => 'Cookie and Cookie Banner',
            'cookie_title' => 'Cookie',
            'cookie_body' => 'A cookie is a small text file stored on a user\'s device by a website to remember information from previous visits, such as login details, preferences, and browsing activity.',
            'banner_title' => 'Cookie Banner',
            'banner_body' => 'A cookie banner is a notice shown on a webpage, often at the top, center, or bottom, to inform users that cookies are used and ask for their consent choices.',
            'back' => 'Back',
            'survey_eyebrow' => 'Participant Information',
            'survey_title' => 'Short pre-survey questions',
            'survey_body' => 'Please answer these basic questions and confirm consent before you move to the definitions page.',
            'age_label' => 'What is your age?',
            'age_placeholder' => 'Select age range',
            'ages' => ['18-24' => '18-24', '25-34' => '25-34', '35-44' => '35-44', '45-54' => '45-54', '55+' => '55+'],
            'gender_label' => 'What is your gender?',
            'gender_female' => 'Female',
            'gender_male' => 'Male',
            'field_label' => 'What is your field of study?',
            'field_placeholder' => 'Select field',
            'fields' => [
                'it' => 'IT - Information Technology',
                'engineering' => 'Engineering',
                'business' => 'Business',
                'law' => 'Law',
                'medicine' => 'Medicine',
                'other' => 'Other',
            ],
            'screening_incomplete' => 'Complete the three questions and consent items to continue.',
            'screening_underage' => 'This study is limited to participants aged 18 or above.',
            'screening_ready' => 'The participant information is complete and ready to continue.',
            'consent_eyebrow' => 'Consent and Eligibility',
            'consent_title' => 'Confirm participation before starting',
            'age_confirm' => 'I confirm that I am 18 years old or above.',
            'consent_confirm' => 'I voluntarily agree to participate in this academic study.',
            'consent_detail' => 'My responses are anonymous and used for academic purposes only.',
            'consent_underage' => 'This study is limited to participants aged 18 or above.',
            'continue_notice' => 'Please complete all required questions and confirm consent before continuing.',
            'start' => 'Begin the Experiment',
            'success' => 'Your pre-survey has been recorded. The participant is eligible to continue to the experiment.',
            'error' => 'Please review the required fields before continuing.',
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
        <link
            href="https://fonts.googleapis.com/css2?family=Manrope:wght@400;500;600;700;800&family=Noto+Sans+Arabic:wght@400;500;600;700;800&display=swap"
            rel="stylesheet"
        >
        <style>
            :root {
                --bg-1: #dbe6ff;
                --bg-2: #edf3ff;
                --surface: rgba(255, 255, 255, 0.88);
                --surface-strong: #ffffff;
                --ink: #0b1627;
                --muted: #23364f;
                --line: rgba(81, 114, 149, 0.16);
                --accent: #19805e;
                --accent-strong: #10674c;
                --accent-soft: #e8f8f1;
                --warning-soft: #fff4e8;
                --warning-ink: #8a5335;
                --shadow: 0 24px 70px rgba(68, 92, 132, 0.16);
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
                    radial-gradient(circle at top left, rgba(255, 255, 255, 0.88), rgba(255, 255, 255, 0) 28%),
                    radial-gradient(circle at bottom right, rgba(255, 226, 177, 0.32), rgba(255, 226, 177, 0) 32%),
                    linear-gradient(160deg, var(--bg-1) 0%, #d7e2fb 45%, var(--bg-2) 100%);
            }

            .page-shell { width: min(1100px, calc(100% - 24px)); margin: 0 auto; padding: 24px 0 40px; }
            .topbar { display: flex; justify-content: space-between; align-items: center; gap: 16px; margin-bottom: 18px; }
            .brand, .lang-switcher { background: rgba(255,255,255,.72); border: 1px solid rgba(255,255,255,.6); box-shadow: 0 16px 30px rgba(68,92,132,.12); }
            .brand {
                display: inline-flex; align-items: center; gap: 10px; padding: 10px 14px; border-radius: 999px; font-size: .92rem; font-weight: 800;
            }
            .brand-dot { width: 10px; height: 10px; border-radius: 999px; background: linear-gradient(135deg, #19805e, #2ea77e); }
            .lang-switcher { display: inline-flex; gap: 8px; padding: 8px; border-radius: 999px; }
            .lang-link {
                min-height: 42px; padding: 10px 16px; border-radius: 999px; text-decoration: none; color: var(--muted); font-weight: 800;
            }
            .lang-link.active { background: var(--ink); color: #fff; }
            .wizard { background: var(--surface); border: 1px solid rgba(255,255,255,.66); border-radius: var(--radius-xl); box-shadow: var(--shadow); backdrop-filter: blur(18px); overflow: hidden; }
            .wizard-body { padding: 24px; }
            .step { display: none; animation: fadeIn .24s ease; }
            .step.active { display: block; }
            @keyframes fadeIn { from { opacity: 0; transform: translateY(8px);} to { opacity:1; transform:translateY(0);} }
            .hero-layout, .definition-layout, .screening-grid { display: grid; gap: 24px; }
            .definition-layout { grid-template-columns: .95fr 1.05fr; }
            .screening-grid { grid-template-columns: repeat(2, minmax(0,1fr)); }
            .panel { background: rgba(255,255,255,.74); border: 1px solid var(--line); border-radius: var(--radius-lg); padding: 26px; }
            .eyebrow { display: inline-flex; align-items: center; gap: 10px; padding: 8px 14px; border-radius: 999px; background: rgba(25,128,94,.09); color: var(--accent-strong); font-size: .9rem; font-weight: 800; }
            h1,h2,h3,p { margin: 0; }
            .step-title { margin-top: 18px; font-size: clamp(2rem, 4vw, 3.2rem); line-height: 1.04; letter-spacing: -.04em; }
            .step-copy { margin-top: 18px; color: var(--muted); line-height: 1.85; font-size: 1rem; }
            .image-card, .definition-box { background: rgba(255,255,255,.9); border: 1px solid var(--line); }
            .image-card strong, .definition-box strong { display: block; margin-bottom: 8px; font-size: 1rem; }
            .definition-box p { color: var(--muted); line-height: 1.8; }
            .image-stack, .definition-boxes, .checkbox-stack { display: grid; gap: 16px; }
            .image-card { border-radius: var(--radius-lg); padding: 18px; }
            .banner-shot { width: 100%; display: block; border-radius: 18px; border: 1px solid rgba(73,97,122,.1); box-shadow: 0 16px 28px rgba(68,92,132,.12); }
            .definition-box { padding: 18px 20px; border-radius: var(--radius-md); }
            .field, .full-span { display: grid; gap: 10px; }
            .full-span { grid-column: 1 / -1; }
            .label { font-size: 1rem; font-weight: 800; line-height: 1.7; }
            .select, .option label, .checkbox-card { background: rgba(255,255,255,.96); border: 1px solid rgba(86,111,138,.18); border-radius: 18px; }
            .select { width: 100%; min-height: 58px; padding: 0 16px; color: var(--ink); font: inherit; outline: none; }
            .radio-grid { display: grid; grid-template-columns: repeat(2, minmax(0,1fr)); gap: 12px; }
            .option, .checkbox-card { position: relative; }
            .option input, .checkbox-card input { position: absolute; opacity: 0; pointer-events: none; }
            .option label { display: block; min-height: 78px; padding: 16px 18px; cursor: pointer; transition: transform .18s ease, box-shadow .18s ease, border-color .18s ease; }
            .option input:checked + label, .checkbox-card input:checked + label {
                border-color: #10674c;
                border-width: 2px;
                box-shadow: 0 14px 24px rgba(16,103,76,.16);
                transform: translateY(-1px);
            }
            .checkbox-card label { display: flex; gap: 14px; align-items: flex-start; padding: 18px; cursor: pointer; }
            .checkbox-mark { width: 24px; height: 24px; border-radius: 7px; flex: 0 0 auto; margin-top: 2px; border: 1.5px solid rgba(73,97,122,.34); background: #fff; position: relative; }
            .checkbox-card input:checked + label .checkbox-mark { background: var(--accent); border-color: var(--accent); }
            .checkbox-card input:checked + label .checkbox-mark::after { content: ""; position: absolute; top: 4px; left: 8px; width: 5px; height: 10px; border: solid #fff; border-width: 0 2px 2px 0; transform: rotate(45deg); }
            .checkbox-copy strong, .checkbox-copy span { display: block; }
            .checkbox-copy span { margin-top: 4px; color: var(--muted); line-height: 1.8; }
            .notice { margin-top: 16px; padding: 14px 16px; border-radius: 16px; background: var(--warning-soft); border: 1px solid rgba(138,83,53,.14); color: var(--warning-ink); line-height: 1.75; font-size: .95rem; }
            .flash { margin-bottom: 18px; padding: 16px 18px; border-radius: 18px; font-weight: 800; }
            .flash.success { background: #e8fbf4; color: #0f6b51; border: 1px solid rgba(15,107,81,.18); }
            .flash.error { background: #fff1ef; color: #a33a2e; border: 1px solid rgba(163,58,46,.16); }
            .wizard-actions { display: flex; justify-content: space-between; align-items: center; gap: 12px; margin-top: 24px; padding-top: 22px; border-top: 1px solid rgba(86,111,138,.12); }
            .wizard-actions.compact { justify-content: flex-end; }
            .btn-row { display: flex; gap: 12px; flex-wrap: wrap; }
            .btn {
                display: inline-flex; align-items: center; justify-content: center; min-height: 54px; padding: 14px 22px; border-radius: 999px; border: 1px solid transparent; text-decoration: none; font: inherit; font-weight: 800; cursor: pointer; transition: transform .18s ease, box-shadow .18s ease, opacity .18s ease;
            }
            .btn:hover { transform: translateY(-1px); }
            .btn-primary { color: #fff; background: linear-gradient(135deg, var(--accent) 0%, #2ea77e 100%); box-shadow: 0 12px 24px rgba(25,128,94,.2); }
            .btn-secondary { background: #fff; color: var(--ink); border-color: rgba(81,105,127,.24); }
            .btn[disabled] { opacity: .56; cursor: not-allowed; box-shadow: none; transform: none; }
            .step-status { color: var(--muted); font-size: .95rem; font-weight: 700; }
            @media (max-width: 920px) {
                .definition-layout, .screening-grid, .radio-grid { grid-template-columns: 1fr; }
            }
            @media (max-width: 640px) {
                .page-shell { width: min(100% - 16px, 100%); padding: 16px 0 28px; }
                .topbar, .wizard-actions { flex-direction: column; align-items: stretch; }
                .wizard-body, .panel { padding-left: 18px; padding-right: 18px; }
                .step-title { font-size: 1.8rem; line-height: 1.12; }
                .step-copy { font-size: .98rem; line-height: 1.75; }
                .image-card, .definition-box { padding: 16px; }
                .select { min-height: 54px; }
                .btn, .btn-row, .btn-row .btn { width: 100%; }
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
                    <a class="lang-link {{ $isArabic ? '' : 'active' }}" href="{{ route('presurvey', ['lang' => 'en']) }}">English</a>
                    <a class="lang-link {{ $isArabic ? 'active' : '' }}" href="{{ route('presurvey', ['lang' => 'ar']) }}">العربية</a>
                </div>
            </div>

            <div class="wizard">
                <div class="wizard-body">
                    @if (session('started'))
                        <div class="flash success">{{ $copy['success'] }}</div>
                    @endif
                    @if ($errors->any())
                        <div class="flash error">{{ $copy['error'] }}</div>
                    @endif

                    <form method="POST" action="{{ route('presurvey.start') }}" id="presurvey-form">
                        @csrf
                        <input type="hidden" name="lang" value="{{ $lang ?? 'en' }}">
                        <div class="flash error" id="presurvey-notice" hidden>{{ $copy['continue_notice'] }}</div>

                        <section class="step active" data-step="1">
                            <div class="panel">
                                <div class="eyebrow">{{ $copy['welcome_eyebrow'] }}</div>
                                <h1 class="step-title">{{ $copy['welcome_title'] }}</h1>
                                <p class="step-copy">{{ $copy['welcome_body'] }}</p>
                                <div style="margin-top: 28px;">
                                    <div class="eyebrow">{{ $copy['survey_eyebrow'] }}</div>
                                    <h2 class="step-title" style="font-size: clamp(1.7rem, 3vw, 2.5rem);">{{ $copy['survey_title'] }}</h2>
                                    <p class="step-copy">{{ $copy['survey_body'] }}</p>
                                    <div class="screening-grid" style="margin-top: 20px;">
                                        <div class="field">
                                            <label class="label" for="age_range">{{ $copy['age_label'] }}</label>
                                            <select class="select" id="age_range" name="age_range" required>
                                                <option value="">{{ $copy['age_placeholder'] }}</option>
                                                @foreach ($copy['ages'] as $value => $label)
                                                    <option value="{{ $value }}" @selected(old('age_range') === $value)>{{ $label }}</option>
                                                @endforeach
                                            </select>
                                        </div>
                                        <div class="field">
                                            <div class="label">{{ $copy['gender_label'] }}</div>
                                            <div class="radio-grid">
                                                <div class="option">
                                                    <input id="gender_female" type="radio" name="gender" value="female" @checked(old('gender') === 'female') required>
                                                    <label for="gender_female"><strong>{{ $copy['gender_female'] }}</strong></label>
                                                </div>
                                                <div class="option">
                                                    <input id="gender_male" type="radio" name="gender" value="male" @checked(old('gender') === 'male') required>
                                                    <label for="gender_male"><strong>{{ $copy['gender_male'] }}</strong></label>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="field full-span">
                                            <label class="label" for="field_of_study">{{ $copy['field_label'] }}</label>
                                            <select class="select" id="field_of_study" name="field_of_study" required>
                                                <option value="">{{ $copy['field_placeholder'] }}</option>
                                                @foreach ($copy['fields'] as $value => $label)
                                                    <option value="{{ $value }}" @selected(old('field_of_study') === $value)>{{ $label }}</option>
                                                @endforeach
                                            </select>
                                        </div>
                                        <div
                                            class="field full-span"
                                            id="field-of-study-other-wrap"
                                            style="{{ old('field_of_study') === 'other' ? '' : 'display: none;' }}"
                                        >
                                            <label class="label" for="field_of_study_other">{{ $isArabic ? 'اكتب تخصصك الدراسي' : 'Please write your field of study' }}</label>
                                            <input
                                                class="select"
                                                id="field_of_study_other"
                                                name="field_of_study_other"
                                                type="text"
                                                maxlength="255"
                                                placeholder="{{ $isArabic ? 'اكتب التخصص هنا' : 'Write your field here' }}"
                                                value="{{ old('field_of_study_other') }}"
                                            >
                                        </div>
                                    </div>
                                </div>

                                <div style="margin-top: 28px;">
                                    <div class="eyebrow">{{ $copy['consent_eyebrow'] }}</div>
                                    <h2 class="step-title" style="font-size: clamp(1.7rem, 3vw, 2.5rem);">{{ $copy['consent_title'] }}</h2>
                                    <div class="checkbox-stack" style="margin-top: 22px;">
                                        <div class="checkbox-card">
                                            <input id="is_18_plus" type="checkbox" name="is_18_plus" value="1" @checked(old('is_18_plus')) required>
                                            <label for="is_18_plus">
                                                <span class="checkbox-mark" aria-hidden="true"></span>
                                                <span class="checkbox-copy"><strong>{{ $copy['age_confirm'] }}</strong></span>
                                            </label>
                                        </div>
                                        <div class="checkbox-card">
                                            <input id="consent" type="checkbox" name="consent" value="1" @checked(old('consent')) required>
                                            <label for="consent">
                                                <span class="checkbox-mark" aria-hidden="true"></span>
                                                <span class="checkbox-copy">
                                                    <strong>{{ $copy['consent_confirm'] }}</strong>
                                                    <span>{{ $copy['consent_detail'] }}</span>
                                                </span>
                                            </label>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="wizard-actions">
                                <div class="btn-row">
                                    <div class="step-status" id="consent-status"></div>
                                    <button class="btn btn-primary" type="button" data-next-step="2">{{ $copy['next'] }}</button>
                                </div>
                            </div>
                        </section>

                        <section class="step" data-step="2">
                            <div class="definition-layout">
                                <div class="panel">
                                    <div class="eyebrow">{{ $copy['definitions_eyebrow'] }}</div>
                                    <h2 class="step-title" style="font-size: clamp(1.7rem, 3vw, 2.5rem);">{{ $copy['definitions_title'] }}</h2>
                                    <div class="definition-boxes" style="margin-top: 20px;">
                                        <div class="definition-box">
                                            <strong>{{ $copy['cookie_title'] }}</strong>
                                            <p>{{ $copy['cookie_body'] }}</p>
                                        </div>
                                        <div class="definition-box">
                                            <strong>{{ $copy['banner_title'] }}</strong>
                                            <p>{{ $copy['banner_body'] }}</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="image-stack">
                                    <div class="image-card">
                                        <img
                                            class="banner-shot"
                                            src="{{ asset($isArabic ? 'study-images/cookie-banner-ar.jpg' : 'study-images/cookie-banner-en.jpg') }}"
                                            alt="{{ $copy['definitions_title'] }}"
                                        >
                                    </div>
                                </div>
                            </div>
                            <div class="wizard-actions">
                                <div class="btn-row"><button class="btn btn-secondary" type="button" data-prev-step="1">{{ $copy['back'] }}</button></div>
                                <div class="btn-row"><button class="btn btn-primary" id="start-button" type="submit" disabled>{{ $copy['start'] }}</button></div>
                            </div>
                        </section>
{{--
                        Removed separate demographics and consent steps.
--}}
                    </form>
                </div>
            </div>
        </div>

        <script>
            const steps = Array.from(document.querySelectorAll('[data-step]'));
            const ageRange = document.getElementById('age_range');
            const fieldOfStudy = document.getElementById('field_of_study');
            const fieldOfStudyOtherWrap = document.getElementById('field-of-study-other-wrap');
            const fieldOfStudyOther = document.getElementById('field_of_study_other');
            const ageGate = document.getElementById('is_18_plus');
            const consent = document.getElementById('consent');
            const startButton = document.getElementById('start-button');
            const consentStatus = document.getElementById('consent-status');
            const presurveyNotice = document.getElementById('presurvey-notice');
            const consentUnderage = @json($copy['consent_underage']);
            const continueNotice = @json($copy['continue_notice']);

            function showStep(stepNumber) {
                steps.forEach((step) => step.classList.toggle('active', Number(step.dataset.step) === stepNumber));
            }

            function updateFieldOfStudyOtherState() {
                const isOther = fieldOfStudy.value === 'other';
                fieldOfStudyOtherWrap.style.display = isOther ? '' : 'none';

                if (isOther) {
                    fieldOfStudyOther.setAttribute('required', 'required');
                    return;
                }

                fieldOfStudyOther.removeAttribute('required');
                fieldOfStudyOther.value = '';
            }

            function demographicReady() {
                const otherFieldReady = fieldOfStudy.value !== 'other' || Boolean(fieldOfStudyOther.value.trim());

                return Boolean(
                    ageRange.value &&
                    document.querySelector('input[name="gender"]:checked') &&
                    fieldOfStudy.value &&
                    otherFieldReady
                );
            }

            function participantEligible() {
                return Boolean(ageRange.value);
            }

            function updateConsentState() {
                const ready = demographicReady() && participantEligible() && ageGate.checked && consent.checked;
                startButton.disabled = !ready;
                presurveyNotice.hidden = true;

                if (!participantEligible() && ageRange.value) {
                    consentStatus.textContent = consentUnderage;
                    return;
                }

                consentStatus.textContent = '';
            }

            document.querySelectorAll('[data-next-step]').forEach((button) => {
                button.addEventListener('click', () => {
                    const nextStep = Number(button.dataset.nextStep);

                    if (nextStep === 2 && (!demographicReady() || !participantEligible() || !ageGate.checked || !consent.checked)) {
                        presurveyNotice.hidden = false;
                        consentStatus.textContent = continueNotice;
                        presurveyNotice.scrollIntoView({ behavior: 'smooth', block: 'nearest' });
                        return;
                    }

                    showStep(nextStep);
                });
            });

            document.querySelectorAll('[data-prev-step]').forEach((button) => {
                button.addEventListener('click', () => showStep(Number(button.dataset.prevStep)));
            });

            document.getElementById('presurvey-form').addEventListener('change', () => {
                updateFieldOfStudyOtherState();
                updateConsentState();
            });

            updateFieldOfStudyOtherState();
            updateConsentState();
            @if ($errors->any() || session('started'))
                showStep(1);
            @else
                showStep(1);
            @endif
        </script>
    </body>
</html>
