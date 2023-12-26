<!DOCTYPE html>
<html lang="en">
    <head>
        <!--====== Required meta tags ======-->
        <meta charset="utf-8">
        <meta http-equiv="x-ua-compatible" content="ie=edge">
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <!--====== Title ======-->
        <title>Study Abroad - Search Schools & Programs Abroad</title>
        <!--====== Favicon Icon ======-->
        <link rel="shortcut icon" href="{{config('app.url')}}/front-assets/images/favicon-.ico" type="image/png">
        <!--====== Bootstrap css ======-->
        <link rel="stylesheet" href="{{config('app.url')}}/front-assets/css/bootstrap.min.css">
        <!--====== FontAwesoem css ======-->
        <link rel="stylesheet" href="{{config('app.url')}}/front-assets/fonts/themify-icons/themify-icons.css">
        <!--====== Flaticon css ======-->
        <link rel="stylesheet" href="{{config('app.url')}}/front-assets/fonts/flaticon/flaticon.css">
        <!--====== Magnific Popup css ======-->
        <link rel="stylesheet" href="{{config('app.url')}}/front-assets/css/magnific-popup.css">
        <!--====== Slick css ======-->
        <link rel="stylesheet" href="{{config('app.url')}}/front-assets/css/slick.css">
        <!--====== Nice-select css ======-->
        <link rel="stylesheet" href="{{config('app.url')}}/front-assets/css/nice-select.css">
        <!--====== Jquery ui css ======-->
        <link rel="stylesheet" href="{{config('app.url')}}/front-assets/css/jquery-ui.min.css">
        <!--====== Animate css ======-->
        <link rel="stylesheet" href="{{config('app.url')}}/front-assets/css/animate.css">
        <!--====== Default css ======-->
        <link rel="stylesheet" href="{{config('app.url')}}/front-assets/css/default.css">
        <!--====== Style css ======-->
        <link rel="stylesheet" href="{{config('app.url')}}/front-assets/css/style.css">
    </head>
    <body>



        @include('template.front.header')

        @yield('content')

        <!--====== Start Footer ======-->
        @include('template.front.footer')

        <!--====== End Footer ======-->
        <!--====== back-to-top ======-->
        <a href="#" class="back-to-top" ><i class="ti-angle-up"></i></a>
        <!--====== Jquery js ======-->
        <script src="{{config('app.url')}}/front-assets/js/vendor/jquery-3.6.0.min.js"></script>
        <!--====== Popper js ======-->
        <script src="{{config('app.url')}}/front-assets/js/popper.min.js"></script>
        <!--====== Bootstrap js ======-->
        <script src="{{config('app.url')}}/front-assets/js/bootstrap.min.js"></script>
        <!--====== Slick js ======-->
        <script src="{{config('app.url')}}/front-assets/js/slick.min.js"></script>
        <!--====== Magnific Popup js ======-->
        <script src="{{config('app.url')}}/front-assets/js/jquery.magnific-popup.min.js"></script>
        <!--====== Isotope js ======-->
        <script src="{{config('app.url')}}/front-assets/js/isotope.pkgd.min.js"></script>
        <!--====== Imagesloaded js ======-->
        <script src="{{config('app.url')}}/front-assets/js/imagesloaded.pkgd.min.js"></script>
        <!--====== Nice-select js ======-->
        <script src="{{config('app.url')}}/front-assets/js/jquery.nice-select.min.js"></script>
        <!--====== counterup js ======-->
        <script src="{{config('app.url')}}/front-assets/js/jquery.counterup.min.js"></script>
        <!--====== waypoints js ======-->
        <script src="{{config('app.url')}}/front-assets/js/jquery.waypoints.js"></script>
        <!--====== Ui js ======-->
        <script src="{{config('app.url')}}/front-assets/js/jquery-ui.min.js"></script>
        <!--====== Wow js ======-->
        <script src="{{config('app.url')}}/front-assets/js/wow.min.js"></script>
        <!--====== Main js ======-->
        <script src="{{config('app.url')}}/front-assets/js/main.js"></script>
    </body>
</html>
