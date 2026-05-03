@extends('layouts.app')

@section('title', 'من نحن  - عليان للبيوت الزراعية')

@section('styles')
    <link rel="stylesheet" href="{{ asset('css/about.css') }}">
@endsection

@section('content')

{{-- HERO --}}
<section class="about-hero">
    <div class="about-hero__content">
        <span class="about-hero__tag">من نحن</span>
        <h1 class="about-hero__title">رواد <em>البيوت الزراعية</em><br>منذ عام 1992</h1>
        <p class="about-hero__lead">
            عليان للبيوت الزراعية شركة رائدة في تصنيع وتوريد البيوت الزراعية
            وتقنياتها، نخدم المزارعين والمستثمرين في دول عديدة بأعلى معايير الجودة.
        </p>
        <div class="about-hero__actions">
            <a href="{{ route('products') }}" class="btn-primary">منتجات ومشاريع</a>
            <a href="{{ route('contact') }}"  class="btn-outline">تواصل معنا</a>
        </div>
    </div>
    <div class="about-hero__visual">
        <img src="{{ asset('img/about_img.webp') }}" alt="الداخل الزراعي">
        <div class="about-hero__badge">
            <div class="yr">1992</div>
            <div class="yr-lbl">سنة التأسيس</div>
        </div>
    </div>
</section>

{{-- STATS --}}
<div class="about-stats">
    <div class="about-stats__item rv">
        <div class="about-stats__num" data-target="30" data-prefix="+" >0</div>
        <div class="about-stats__lbl">عامًا من الخبرة</div>
    </div>
    <div class="about-stats__item rv d1">
        <div class="about-stats__num" data-target="500" data-prefix="+">0</div>
        <div class="about-stats__lbl">مشروع منجز</div>
    </div>
    <div class="about-stats__item rv d2">
        <div class="about-stats__num" data-target="10" data-prefix="+">0</div>
        <div class="about-stats__lbl">خدمة نقدمها</div>
    </div>
    <div class="about-stats__item rv d3">
        <div class="about-stats__num" data-target="98" data-suffix="٪">0</div>
        <div class="about-stats__lbl">رضا العملاء</div>
    </div>
</div>

{{-- STORY --}}
<div class="about-story">
    <div class="about-story__img rv">
        <img src="{{ asset('img/about_two.webp') }}" alt="جودة المواد">
    </div>
    <div class="about-story__body">
        <p class="about-hero__tag section-tag">قصتنا  </p>
        <h2 class="section-title">شركة رائدة في <em>صناعة البيوت</em> الزراعية</h2>
        <p>
            تأسست شركة عليان للبيوت الزراعية عام 1992 لتكون شركة رائدة في مجال
            صناعة البيوت الزراعية والتكنولوجيا المرتبطة بها. قامت الشركة بتوريد
            بيوت زراعية بكافة أنواعها للكثير من الدول وفقًا لأعلى المواصفات والمعايير.
        </p>
    </div>
</div>

{{-- CTA --}}
<section class="about-cta">
    <h2>هل أنت مستعد لبناء <em>بيتك الزراعي؟</em></h2>
    <p>أخبرنا عن مشروعك وسنصمم لك الحل الأمثل وفق أعلى معايير الجودة.</p>
    <div class="cta-btns">
        <a href="{{ route("contact") }}" class="btn-light">ابدأ الآن</a>
        <a href="{{ asset("files/catalogue.pdf") }}" class="btn-border" target="_blank">عرض الكتالوج</a>
    </div>
</section>

@endsection

@section('scripts')
<script>
    const io = new IntersectionObserver(entries => {
        entries.forEach(e => {
            if (e.isIntersecting) { e.target.classList.add('show'); io.unobserve(e.target); }
        });
    }, { threshold: 0.12 });
    document.querySelectorAll('.rv').forEach(el => io.observe(el));
</script>

<script>
    const counters = document.querySelectorAll('.about-stats__num');

    const animateCounter = (el) => {
        const target = +el.dataset.target;
        const prefix = el.dataset.prefix || '';
        const suffix = el.dataset.suffix || '';

        let count = 0;
        const duration = 1200; // مدة الأنيميشن
        const startTime = performance.now();

        const update = (currentTime) => {
            const progress = Math.min((currentTime - startTime) / duration, 1);
            
            // easing ناعم
            const ease = 1 - Math.pow(1 - progress, 3);

            count = Math.floor(ease * target);

            el.textContent = prefix + count + suffix;

            if (progress < 1) {
                requestAnimationFrame(update);
            } else {
                el.textContent = prefix + target + suffix;
            }
        };

        requestAnimationFrame(update);
    };

    const ioCounter = new IntersectionObserver(entries => {
        entries.forEach(entry => {
            if (entry.isIntersecting) {
                animateCounter(entry.target);
                ioCounter.unobserve(entry.target);
            }
        });
    }, { threshold: 0.5 });

    counters.forEach(counter => ioCounter.observe(counter));
</script>
@endsection