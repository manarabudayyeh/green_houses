<!DOCTYPE html>

<html lang="ar">
    <head>   
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <meta name="format-detection" content="telephone=no">
    <meta name="format-detection" content="date=no">
    <meta name="format-detection" content="address=no">
    <meta name="format-detection" content="email=no">
    <meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no, maximum-scale=1">
    <title>@yield('title', 'عليان للبيوت الزراعية')</title>
    <meta name="keywords" content="" />
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <meta name="url" content="{{ url('/') }}">
    @yield('meta')
    
    <link rel="icon" type="image/png" href="{{ asset('img/favicon.ico') }}">

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Tajawal:wght@400;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('css/styles.css') }}">
        
    @yield('styles')
</head>
<body>

    {{-- Header --}}
    @include('partials.header')

    {{-- Content --}}
    <main>
        @yield('content')
    </main>

    {{-- Footer --}}
    @include('partials.footer')

    
   <!-- BODY EOF   -->
    <script src="https://code.jquery.com/jquery-2.1.0.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"></script>

    <script>
        
(function ($) {
  $.fn.menumaker = function (options) {
    var cssmenu = $(this),
      settings = $.extend(
        {
          format: "dropdown",
          sticky: false
        },
        options
      );
    return this.each(function () {
      $(this)
        .find(".button")
        .on("click", function () {
          $(this).toggleClass("menu-opened");
          var mainmenu = $(this).next("ul");
          if (mainmenu.hasClass("open")) {
            mainmenu.slideToggle().removeClass("open");
          } else {
            mainmenu.slideToggle().addClass("open");
            if (settings.format === "dropdown") {
              mainmenu.find("ul").show();
            }
          }
        });
      cssmenu.find("li ul").parent().addClass("has-sub");
      multiTg = function () {
        cssmenu
          .find(".has-sub")
          .prepend('<span class="submenu-button"></span>');
        cssmenu.find(".submenu-button").on("click", function () {
          $(this).toggleClass("submenu-opened");
          if ($(this).siblings("ul").hasClass("open")) {
            $(this).siblings("ul").removeClass("open").slideToggle();
          } else {
            $(this).siblings("ul").addClass("open").slideToggle();
          }
        });
      };
      if (settings.format === "multitoggle") multiTg();
      else cssmenu.addClass("dropdown");
      if (settings.sticky === true) cssmenu.css("position", "fixed");
      resizeFix = function () {
        var mediasize = 1000;
        if ($(window).width() > mediasize) {
          cssmenu.find("ul").show();
        }
        if ($(window).width() <= mediasize) {
          cssmenu.find("ul").hide().removeClass("open");
        }
      };
      resizeFix();
      return $(window).on("resize", resizeFix);
    });
  };
})(jQuery);

(function ($) {
  $(document).ready(function () {
    $("#cssmenu").menumaker({
      format: "multitoggle"
    });
  });
})(jQuery);

    </script>

    <script>
    const header = document.getElementById('site-header');

    window.addEventListener('scroll', () => {
        if (window.scrollY > 95) {
            header.classList.add('scrolled');
        } else {
            header.classList.remove('scrolled');
        }
    });
</script>
    @yield(section: 'scripts')
    </body>
</html>

