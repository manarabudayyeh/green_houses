@extends('layouts.app')

@section('title', 'الرئيسية')

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
                    <a class="btn" href="#">استعرض مشاريعنا</a>
                </div>
            </div>
            <div class="carousel-item">
                <img src="{{ asset('img/proj_2.webp') }}" alt="proj_two">
                <div class="carousel-caption">
                    <a class="btn" href="#">تواصل معنا</a>
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


    
@endsection