@extends('layouts.app')

@section('title', 'خدماتنا - عليان للبيوت الزراعية')

@section('styles')
    <link rel="stylesheet" href="{{ asset('css/services.css') }}">
@endsection

@section('content')
<div class="page-wrapper">

    <div class="section-header section-header rv from-top">
        <h2>خدماتنا</h2>
    </div>

    <div class="section-body">

        <p class="intro-text intro-text rv from-right d1">
            تقدم لكم عليان للبيوت الزراعية خبرة ٣٠ عام في مجال البيوت المحميـة
            لتلبية متطلبات إتمام مشاريعكم الزراعية على أكمل وجه من خلال خدمات
            عديدة نقدمها بمهنية عالية:
        </p>

        <ul class="services-list rv from-bottom d1">

            @php
                $services = [
                    'تركيب كافة أنواع البيوت المحمية و الإشراف على تركيبها من قبل مهندسين و فنيين مختصين.',
                    'تجهيز المشاتل بأحدث التقنيات و المعدات.',
                    'إجراء دراسات شاملة لمشاريعكم الزراعية و تقديم رسومات هندسية و فنية للتوضيح.',
                    'نحن على اتم الاستعداد لتصميم وتنفيذ كافة انواع البيوت الزراعية حسب الطلب.',
                ];
            @endphp

           @foreach($services as $i => $service)
                <li class="rv from-right d{{ $i+1 }}">
                    <span class="bullet-icon">
                        <svg viewBox="0 0 14 14">
                            <polyline points="2,7 5.5,10.5 12,3"/>
                        </svg>
                    </span>
                    <span>{{ $service }}</span>
                </li>
            @endforeach

        </ul>

        <div class="image-grid">

            @php
                $images = [
                    ['src' => asset('img/products/service_one.webp'),  'alt' => 'service_one'],
                    ['src' => asset('img/products/service_two.webp'),   'alt' => 'service_two'],
                    ['src' => asset('img/products/service_three.webp'),      'alt' => 'service_three'],
                    ['src' => asset('img/products/service_four.webp'),  'alt' => 'service_four'],
                ];
            @endphp

            @foreach($images as $image)
                <div class="img-card">
                    <img src="{{ $image['src'] }}" alt="{{ $image['alt'] }}" loading="lazy">
                    <div class="overlay"></div>
                </div>
            @endforeach

        </div>

    </div>
</div>


@endsection

@section('scripts')
<script>
    const io = new IntersectionObserver((entries) => {
        entries.forEach(entry => {
            if (entry.isIntersecting) {
                entry.target.classList.add('show');
                io.unobserve(entry.target);
            }
        });
    }, { threshold: 0.15 });

    document.querySelectorAll('.rv').forEach(el => io.observe(el));
</script>
@endsection