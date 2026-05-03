 <header>
        <div class="header-top">
            <div class="container">
                <div class="row">
                    <div class="col-md-5 col-sm-12 right_info">
                        <p><i class="fa fa-map-marker"></i> عمّان, الأردن</p>
                    </div>
                    <div class="col-md-7 col-sm-12 left_info">
                        <ul>
                            <li><i class="fa fa-mobile-alt"></i><a href="tel:+962796241656" class="mobile-header">+962 796241656</a></li>
                            <li><i class="fa fa-envelope" aria-hidden="true"></i><a href="mailto:sales@greenhousesjo.com">sales@greenhousesjo.com</a></li>
                            <li><a href="https://www.facebook.com/Alayyangreenhouses/" target="_blank"><i class="fab fa-facebook-f" aria-hidden="true"></i>
                                Alayyan Greenhouses
                            </a>
                        </li>
                        </ul>
                    </div>

                </div>
            </div>
        </div>

        <div class="header-main">
            <div class="container">
                <nav id='cssmenu'>
                    <div class="logo">
                        <a href="{{ url('/') }}"><img src="{{ asset('img/greenHouseLogo.png') }}"></a>
                    </div>
                    <div id="head-mobile"></div>
                    <div class="button"></div>
                    <ul>
                        <li class="{{ request()->is('/') ? 'active' : '' }}"><a href="{{ url('/') }}">الرئيسية</a></li>
                        <li class="{{ request()->is('about') ? 'active' : '' }}"><a href="{{ route("about") }}">من نحن</a></li>
                        <li class="{{ request()->is('services') ? 'active' : '' }}"><a href="{{ route("services") }}">خدماتنا</a></li>
                        <li class="{{ request()->is('products') ? 'active' : '' }}"><a href="{{ route("products") }}">منتجاتنا</a></li>
                        <li class="{{ request()->is('contact') ? 'active' : '' }}"><a href="{{ route("contact") }}">تواصل معنا</a></li>
                    </ul>
                </nav>
            </div>
        </div>
    </header>