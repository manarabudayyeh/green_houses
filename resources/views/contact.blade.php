@extends('layouts.app')
@section('title', 'تواصل معنا - عليان للبيوت الزراعية')

@section('styles')
    <link rel="stylesheet" href="{{ asset('css/contact.css') }}">
@endsection

@section('content')

<section class="contact-banner">
    <div class="cb-deco cb-deco--tr"></div>
    <div class="cb-deco cb-deco--tr2"></div>
    <div class="cb-deco cb-deco--bl"></div>
    <div class="cb-content">
        <span class="cb-badge">تواصل معنا</span>
        <h1>نحن هنا لخدمتكم</h1>
        <p>فريقنا جاهز للإجابة على استفساراتكم وتقديم أفضل الحلول الزراعية</p>
        <div class="cb-line"></div>
    </div>
    <div class="cb-arch"></div>
</section>

<section class="contact-cards-section">
    <div class="container">
        <div class="contact-cards-grid">

            <div class="contact-card">
                <div class="cc-icon">
                    <i class="fa fa-phone"></i>
                </div>
                <div class="cc-label">هاتف</div>
                <div class="cc-value">
                    <a href="tel:+962796241656" class="telephone">+962 79 624 1656</a>
                </div>
            </div>

            <div class="contact-card">
                <div class="cc-icon">
                    <i class="fa fa-envelope"></i>
                </div>
                <div class="cc-label">البريد الإلكتروني</div>
                <div class="cc-value">
                    <a href="mailto:sales@greenhousesjo.com">sales@greenhousesjo.com</a>
                </div>
            </div>

            <div class="contact-card">
                <div class="cc-icon">
                    <i class="fa fa-map-marker-alt"></i>
                </div>
                <div class="cc-label">الموقع</div>
                <div class="cc-value">عمّان، الأردن</div>
            </div>

            <div class="contact-card">
                <div class="cc-icon">
                    <i class="fab fa-facebook-f"></i>
                </div>
                <div class="cc-label">فيسبوك</div>
                <div class="cc-value">
                    <a href="https://www.facebook.com/Alayyangreenhouses/" target="_blank">
                        Alayyan Greenhouses
                    </a>
                </div>
            </div>

        </div>
    </div>
</section>

<div class="map-divider">
    <div class="md-line"></div>
    <span>موقعنا على الخريطة</span>
    <div class="md-line"></div>
</div>

{{-- MAP --}}
<section class="map-section">
    <div class="container">
        <div class="map-header">
            <div class="map-header-icon">
                <i class="fa fa-map-marker-alt"></i>
            </div>
            <div class="map-header-text">
                <h3>عليان للبيوت الزراعية</h3>
                <p>عمّان، المملكة الأردنية الهاشمية</p>
            </div>
        </div>
        <div class="map-frame">
            <iframe
                src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3381.0!2d35.6183186!3d32.2255471!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x151c93346be809bf:0xb3b6c08d4816aa9a!2sAlayyan+Greenhouses!5e0!3m2!1sar!2sjo!4v1700000000000"
                width="100%" height="420"
                style="border:0;" allowfullscreen
                loading="lazy"
                referrerpolicy="no-referrer-when-downgrade"
                title="موقع عليان للبيوت الزراعية">
            </iframe>
        </div>
        <div class="map-footer">
            <div class="map-address">
                <i class="fa fa-map-marker-alt"></i>
                عمّان، المملكة الأردنية الهاشمية
            </div>
            <a class="map-btn"
            href="https://www.google.com/maps/place/Alayyan+Greenhouses/@32.2255471,35.6208935,17z"
            target="_blank">
                <i class="fa fa-map-marker-alt"></i>
                فتح في خرائط جوجل
            </a>
        </div>
    </div>
</section>

@endsection