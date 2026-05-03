@extends('layouts.app')

@section('title', 'الرئيسية  - عليان للبيوت الزراعية')

@section('styles')
    <link rel="stylesheet" href="{{ asset('css/home.css') }}">
@endsection

@section('content')

    <div id="slider-home" class="carousel slide" data-ride="carousel" data-pause="false">
        <ul class="carousel-indicators">
            <li data-target="#slider-home" data-slide-to="0" class="active"></li>
            <li data-target="#slider-home" data-slide-to="1"></li>
        </ul>
        <div class="carousel-inner">
            <div class="carousel-item active">
                <img src="{{ asset('img/proj_1.webp') }}" alt="proj_one">
                <div class="carousel-caption">
                    <a class="btn" href="{{ route('products') }}" target="_blank">استعرض مشاريعنا</a>
                </div>
            </div>
            <div class="carousel-item">
                <img src="{{ asset('img/proj_2.webp') }}" alt="proj_two">
                <div class="carousel-caption">
                    <a class="btn" href="{{ route('contact') }}" target="_blank">تواصل معنا</a>
                </div>
            </div>
        </div>
        <a class="carousel-control-prev" href="#slider-home" data-slide="prev">
            <span class="carousel-control-prev-icon"></span>
        </a>
        <a class="carousel-control-next" href="#slider-home" data-slide="next">
            <span class="carousel-control-next-icon"></span>
        </a>
    </div>

    <section class="about-us-section" dir="rtl">
        <div class="container-about">
            <div class="about-wrapper">
                
                <div class="about-content">
                    <h6 class="section-subtitle">تعرف علينا</h6>
                    <h2 class="section-title">خبراء في تكنولوجيا الزراعة الحديثة</h2>
                    <p class="about-description">
                        نحن نسخر الابتكار الهندسي لتقديم حلول زراعية متكاملة. من خلال خبرتنا في إنشاء البيوت المحمية وأنظمة التحكم المناخي، نساعد المزارعين على تحقيق أقصى كفاءة إنتاجية بأقل استهلاك للموارد.
                    </p>

                    <div class="pillars-grid">
                        <div class="pillar-item">
                            <span class="icon">⛺</span>
                            <div class="pillar-info">
                                <h5>البيوت النفقية</h5>
                                <p>تصاميم متنية وسهلة التركيب لمختلف المواسم.</p>
                            </div>
                        </div>
                        
                        <div class="pillar-item">
                            <span class="icon">🌾</span>
                            <div class="pillar-info">
                                <h5>الصالات الزراعية</h5>
                                <p>مساحات واسعة مجهزة بأحدث التقنيات الهيكلية.</p>
                            </div>
                        </div>

                        <div class="pillar-item">
                            <span class="icon">❄️</span>
                            <div class="pillar-info">
                                <h5>أنظمة التبريد</h5>
                                <p>حلول تبريد ذكية لمواجهة الحرارة العالية.</p>
                            </div>
                        </div>

                        <div class="pillar-item">
                            <span class="icon">🌿</span>
                            <div class="pillar-info">
                                <h5>الزراعة المائية</h5>
                                <p>الزراعة دون الحاجة الى تربة تقليدية.</p>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="about-visual">
                    <div class="image-stack">
                        <img src="{{ asset('img/about_img.webp') }}" alt="مشاريعنا" class="main-img">
                        <div class="experience-badge">
                            <span>+30</span>
                            <p>عاماً من الخبرة</p>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </section>

    <section class="hs-section hs-services" dir="rtl">
    <div class="hs-inner">
 
        {{-- النص --}}
        <div class="hs-content hs-reveal hs-reveal--right">
            <span class="hs-eyebrow">ما نقدمه</span>
            <h2 class="hs-title">خدماتنا</h2>
            <div class="hs-rule"><span></span><i></i><span></span></div>
            <p class="hs-intro">
                خبرة ٣٠ عاماً في مجال البيوت المحمية لتلبية متطلبات
                مشاريعكم الزراعية على أكمل وجه.
            </p>
            <ul class="hs-list">
                @php
                    $services = [
                        'تركيب كافة أنواع البيوت المحمية والإشراف عليها من قبل مهندسين وفنيين مختصين.',
                        'تجهيز المشاتل بأحدث التقنيات والمعدات.',
                        'إجراء دراسات شاملة وتقديم رسومات هندسية وفنية لمشاريعكم.',
                        'تصميم وتنفيذ كافة أنواع البيوت الزراعية حسب الطلب.',
                    ];
                @endphp
                @foreach($services as $i => $s)
                <li class="hs-reveal hs-reveal--up" style="--hs-delay: {{ $i * 80 }}ms">
                    <span class="hs-dot"></span>
                    <span>{{ $s }}</span>
                </li>
                @endforeach
            </ul>
            <a href="{{ route('services') }}" target="_blank" class="hs-btn hs-btn--primary">
                تفاصيل الخدمات <span class="hs-arrow">←</span>
            </a>
        </div>
 
        {{-- الصورة --}}
        <div class="hs-visual hs-reveal hs-reveal--left">
            <div class="hs-img-wrap">
                <img src="{{ asset('img/service_section.webp') }}" alt="خدماتنا" loading="lazy">
            </div>
        </div>
 
    </div>
</section>
 

<section class="hs-section hs-products" dir="rtl">
    <div class="hs-inner hs-inner--rev">
 
        {{-- الصورة --}}
        <div class="hs-visual hs-reveal hs-reveal--right">
            <div class="hs-img-wrap">
                <img src="{{ asset('img/products/multi_span_one.webp') }}" alt="منتجاتنا" loading="lazy">
                <div class="hs-img-badge hs-img-badge--green">
                <span class="hs-badge-num" dir="ltr">10+</span>
                    <span class="hs-badge-txt">منتجات متكاملة</span>
                </div>
            </div>
        </div>
 
        {{-- النص --}}
        <div class="hs-content hs-reveal hs-reveal--left">
            <span class="hs-eyebrow">ما نصنعه</span>
            <h2 class="hs-title">منتجاتنا</h2>
            <div class="hs-rule"><span></span><i></i><span></span></div>
            <p class="hs-intro">حلول زراعية متطورة لأعلى إنتاجية وأفضل جودة.</p>
 
            <div class="hs-prod-grid">
                @php
                    $products = [
                        ['name' => 'البيوت النفقية',   'desc' => 'مفردة، مبردة وقائمة الجوانب بتغطيات متعددة.'],
                        ['name' => 'الصالات الزراعية', 'desc' => 'متعددة الخانات مع أنظمة تحكم مناخي كاملة.'],
                        ['name' => 'أنظمة التبريد',    'desc' => 'مراوح وخلايا إيطالية عالية الكفاءة.'],
                        ['name' => 'الزراعة المائية',  'desc' => 'زراعة دون تربة بإنتاجية عالية.'],
                        ['name' => 'المعرشات الشبكية', 'desc' => 'حماية المحاصيل الشجرية بكلفة منخفضة.'],
                        ['name' => 'الاكسسوارات',      'desc' => 'بروفيلات ومرابط إيطالية الصنع.'],
                    ];
                @endphp
                @foreach($products as $i => $p)
                <div class="hs-prod-cell hs-reveal hs-reveal--up" style="--hs-delay: {{ $i * 70 }}ms">
                    <h3>{{ $p['name'] }}</h3>
                    <p>{{ $p['desc'] }}</p>
                </div>
                @endforeach
            </div>
 
            <a href="{{ route('products') }}" target="_blank" class="hs-btn hs-btn--outline">
                  استعرض كامل المنتجات <span class="hs-arrow">←</span>
            </a>
        </div>
 
    </div>
</section>

<section class="proj-section" dir="rtl">
    <div class="proj-header">
        <span class="hs-eyebrow">أعمالنا</span>
        <h2 class="hs-title">مشاريعنا المنجزة</h2>
        <div class="hs-rule"><span></span><i></i><span></span></div>
    </div>

    <div class="proj-carousel-wrap">
        <div class="proj-track-outer">
            <div class="proj-track" id="projTrack">
                @php
                $images = [
                    ['src' => 'img/projects/project_one.webp', 'alt' => 'project_one'],
                    ['src' => 'img/projects/project_two.webp', 'alt' => 'project_two'],
                    ['src' => 'img/projects/project_three.webp', 'alt' => 'project_three'],
                    ['src' => 'img/projects/project_four.webp', 'alt' => 'project_four'],
                    ['src' => 'img/projects/project_five.webp', 'alt' => 'project_five'],
                    ['src' => 'img/projects/project_six.webp', 'alt' => 'project_six'],
                    ['src' => 'img/projects/project_seven.webp', 'alt' => 'project_seven'],
                    ['src' => 'img/projects/project_eight.webp', 'alt' => 'project_eight'],
                ];
                @endphp
                @foreach($images as $img)
                <div class="proj-slide">
                    <img src="{{ asset($img['src']) }}" alt="{{ $img['alt'] }}" loading="lazy">
                </div>
                @endforeach
            </div>
        </div>

        <button class="proj-btn proj-btn--prev" id="projPrev" aria-label="السابق">&#10094;</button>
        <button class="proj-btn proj-btn--next" id="projNext" aria-label="التالي">&#10095;</button>

        <div class="proj-dots" id="projDots"></div>
    </div>
</section>


    
@endsection

@section('scripts')
<script>
(function () {
    var io = new IntersectionObserver(function (entries) {
        entries.forEach(function (e) {
            if (e.isIntersecting) {
                var el = e.target;
                var delay = el.style.getPropertyValue('--hs-delay') || '0ms';
                setTimeout(function () {
                    el.classList.add('hs-visible');
                }, parseInt(delay));
                io.unobserve(el);
            }
        });
    }, { threshold: 0.12 });
 
    document.querySelectorAll('.hs-reveal').forEach(function (el) {
        io.observe(el);
    });
})();
</script>

<script>
(function () {
    var track = document.getElementById('projTrack');
    if (!track) return;

    var perView = 3;
    var slides  = track.children.length;
    var maxStep = slides - perView;
    var cur     = 0;
    var dotsWrap = document.getElementById('projDots');

    for (var i = 0; i <= maxStep; i++) {
        var d = document.createElement('button');
        d.className = 'proj-dot' + (i === 0 ? ' active' : '');
        d.dataset.i = i;
        d.addEventListener('click', function () { go(+this.dataset.i); });
        dotsWrap.appendChild(d);
    }

    function slideWidth() {
        var gap = 16;
        return track.children[0].offsetWidth + gap;
    }

    function go(n) {
        cur = Math.max(0, Math.min(n, maxStep));
        track.style.transform = 'translateX(-' + (cur * slideWidth()) + 'px)';
        dotsWrap.querySelectorAll('.proj-dot').forEach(function (d, i) {
            d.className = 'proj-dot' + (i === cur ? ' active' : '');
        });
    }

    document.getElementById('projPrev').addEventListener('click', function () { go(cur - 1); });
    document.getElementById('projNext').addEventListener('click', function () { go(cur + 1); });

    var timer = setInterval(function () { go(cur < maxStep ? cur + 1 : 0); }, 4000);
    track.parentElement.addEventListener('mouseenter', function () { clearInterval(timer); });
    track.parentElement.addEventListener('mouseleave', function () {
        timer = setInterval(function () { go(cur < maxStep ? cur + 1 : 0); }, 4000);
    });

    window.addEventListener('resize', function () {
        perView  = window.innerWidth <= 480 ? 1 : window.innerWidth <= 768 ? 2 : 3;
        maxStep  = slides - perView;
        cur      = Math.min(cur, maxStep);
        go(cur);
    });
})();
</script>

@endsection