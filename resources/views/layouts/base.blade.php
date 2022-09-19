<!DOCTYPE html>
<html lang="en">

<head>
    <!--
    Basic Page Needs
    ==================================================
    -->
    <meta charset="UTF-8">
    <title>SMR Konsultan</title>
    <meta name="description" content="AuCreative theme tempalte">
    <meta name="author" content="AuCreative">
    <meta name="keywords" content="AuCreative theme template">
    <!--
    Mobile Specific Metas
    ==================================================
    -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!--
    CSS
    ==================================================
    -->
    <link href="{{ asset('assets/fonts/fonts.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/vendor/font-awesome/css/font-awesome.min.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/vendor/elegant-icons/style.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/vendor/bootstrap/dist/css/bootstrap.min.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/vendor/owl.carousel/dist/assets/owl.carousel.min.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/vendor/css-hamburgers/dist/hamburgers.min.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/vendor/chosen/chosen.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/vendor/animate.css/animate.min.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/vendor/plyr/plyr.min.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/vendor/magnific-popup/magnific-popup.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/vendor/revolution/css/layers.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/vendor/revolution/css/navigation.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/vendor/revolution/css/settings.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/css/main.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/css/switcher.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/css/colors/primary.css') }}" rel="stylesheet" id="colors">
    <link href="{{ asset('assets/css/retina.css') }}" rel="stylesheet">
    <!--
    Favicons
    ==================================================
    -->
    <link rel="shortcut icon" href="{{ asset('favicon.ico') }}">
    <link rel="apple-touch-icon" href="apple-touch-icon.png">
    <link rel="apple-touch-icon" sizes="72x72" href="apple-touch-icon-72x72.png">
    <link rel="apple-touch-icon" sizes="114x114" href="apple-touch-icon-114x114.png">
    <script src="{{ asset('assets/js/modernizr-custom.js') }}"></script>
</head>

<body>
    <!-- page load-->
    <div class="page-loader">
        <div class="loader"></div>
    </div>
    @include('layouts.header')
    @yield('content')
    <div id="up-to-top">
        <i class="fa fa-angle-up"></i>
    </div>
    @include('layouts.footer')
    <!--
    Javascripts
    ==================================================
    -->
    @vite('resources/js/app.js')
    <script src="{{ asset('assets/vendor/jquery/dist/jquery.min.js') }}"></script>
    <script src="{{ asset('assets/vendor/bootstrap/dist/js/bootstrap.min.js') }}"></script>
    <script src="{{ asset('assets/vendor/bootstrap-progressbar/bootstrap-progressbar.min.js') }}"></script>
    <script src="{{ asset('assets/vendor/owl.carousel/dist/owl.carousel.min.js') }}"></script>
    <script src="{{ asset('assets/vendor/headroom/headroom.min.js') }}"></script>
    <script src="{{ asset('assets/vendor/matchHeight/dist/jquery.matchHeight-min.js') }}"></script>
    <script src="{{ asset('assets/vendor/SmoothScroll/SmoothScroll.js') }}"></script>
    <script src="{{ asset('assets/vendor/isotope/imagesloaded.pkgd.min.js') }}"></script>
    <script src="{{ asset('assets/vendor/isotope/isotope.pkgd.min.js') }}"></script>
    <script src="{{ asset('assets/vendor/plyr/plyr.min.js') }}"></script>
    <script src="{{ asset('assets/vendor/magnific-popup/jquery.magnific-popup.min.js') }}"></script>
    <script src="{{ asset('assets/vendor/jquery-accordion/js/jquery.accordion.js') }}"></script>
    <script src="{{ asset('assets/vendor/chosen/chosen.jquery.js') }}"></script>
    <script src="{{ asset('assets/vendor/waypoints/lib/jquery.waypoints.min.js') }}"></script>
    <script src="{{ asset('assets/vendor/jquery.counterup/jquery.counterup.min.js') }}"></script>
    <script src="{{ asset('assets/vendor/paroller.js/jquery.paroller.min.js') }}"></script>
    <script src="{{ asset('assets/vendor/retinajs/dist/retina.min.js') }}"></script>
    <script src="{{ asset('assets/js/owl-custom.js') }}"></script>
    <script src="{{ asset('assets/js/main.js') }}"></script>
    <script src="{{ asset('assets/js/switcher-custom.js') }}"></script>
    <script src="{{ asset('assets/vendor/revolution/js/jquery.themepunch.tools.min.js') }}"></script>
    <script src="{{ asset('assets/vendor/revolution/js/jquery.themepunch.revolution.min.js') }}"></script>
    <!--
    | (Load Extensions only on Local File Systems !
    | The following part can be removed on Server for On Demand Loading)
    -->
    <script type="text/javascript"
        src="{{ asset('assets/vendor/revolution/js/extensions/revolution.extension.video.min.js') }}"></script>
    <script type="text/javascript"
        src="{{ asset('assets/vendor/revolution/js/extensions/revolution.extension.slideanims.min.js') }}"></script>
    <script type="text/javascript"
        src="{{ asset('assets/vendor/revolution/js/extensions/revolution.extension.actions.min.js') }}"></script>
    <script type="text/javascript"
        src="{{ asset('assets/vendor/revolution/js/extensions/revolution.extension.layeranimation.min.js') }}"></script>
    <script type="text/javascript"
        src="{{ asset('assets/vendor/revolution/js/extensions/revolution.extension.kenburn.min.js') }}"></script>
    <script type="text/javascript"
        src="{{ asset('assets/vendor/revolution/js/extensions/revolution.extension.navigation.min.js') }}"></script>
    <script type="text/javascript"
        src="{{ asset('assets/vendor/revolution/js/extensions/revolution.extension.migration.min.js') }}"></script>
    <script type="text/javascript"
        src="{{ asset('assets/vendor/revolution/js/extensions/revolution.extension.parallax.min.js') }}"></script>
    <script src="{{ asset('assets/js/revo-slider-custom.js') }}"></script>
    <!--
    End Document
    ==================================================
    -->
</body>

</html>
