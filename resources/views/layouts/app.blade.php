 <!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Passionate Hearts Ministries</title>

    <!-- Favicon -->
    <link rel="icon" type="image/png" sizes="56x56" href="{{ asset('images/fav-icon/icon.png') }}">


    <!-- Main style sheet -->
    <link rel="stylesheet" type="text/css" href="{{ asset('css/style.css') }}">
    <!-- responsive style sheet -->
    <link rel="stylesheet" type="text/css" href="{{ asset('css/responsive.css') }}">

    @yield('styles') 
</head>

<body>
   @include('partials.header')
   @include('partials.navigation')
        @yield('content')
    
    @include('partials.footer')
    @yield('scripts') <!-- Placeholder for additional scripts -->
        <!-- Js File_________________________________ -->

        <!-- j Query -->
        <script type="text/javascript" src="{{ asset('vendor/jquery-2.1.4.js') }}"></script>

        <!-- Bootstrap JS -->
        <script type="text/javascript" src="{{ asset('vendor/bootstrap/bootstrap.min.js') }}"></script>

        <!-- Vendor js _________ -->
        <!-- revolution -->
        <script src="{{ asset('vendor/revolution/jquery.themepunch.tools.min.js') }}"></script>
        <script src="{{ asset('vendor/revolution/jquery.themepunch.revolution.min.js') }}"></script>
        <script type="text/javascript" src="{{ asset('vendor/revolution/revolution.extension.slideanims.min.js') }}"></script>
        <script type="text/javascript" src="{{ asset('vendor/revolution/revolution.extension.layeranimation.min.js') }}">
        </script>
        <script type="text/javascript" src="{{ asset('vendor/revolution/revolution.extension.navigation.min.js') }}"></script>
        <script type="text/javascript" src="{{ asset('vendor/revolution/revolution.extension.kenburn.min.js') }}"></script>
        <script type="text/javascript" src="{{ asset('vendor/revolution/revolution.extension.actions.min.js') }}"></script>

        <!-- Google map js -->
        <script src="http://maps.google.com/maps/api/js"></script> <!-- Gmap Helper -->
        <script src="vendor/gmap.js"></script>
        <!-- Bootstrap Select JS -->
        <script type="text/javascript" src="{{ asset('vendor/bootstrap-select/dist/js/bootstrap-select.js') }}"></script>

        <!-- owl.carousel -->
        <script type="text/javascript" src="{{ asset('vendor/owl-carousel/owl.carousel.min.js') }}"></script>
        <!-- js count to -->
        <script type="text/javascript" src="{{ asset('vendor/jquery.appear.js') }}"></script>
        <script type="text/javascript" src="{{ asset('vendor/jquery.countTo.js') }}"></script>
        <!-- fancy box -->
        <script type="text/javascript" src="{{ asset('vendor/fancy-box/jquery.fancybox.pack.js') }}"></script>
        <!-- Progress Bar js -->
        <script type="text/javascript" src="{{ asset('vendor/skills-master/jquery.skills.js') }}"></script>
        <!-- Validation -->
        <script type="text/javascript" src="{{ asset('vendor/contact-form/validate.js') }}"></script>
        <script type="text/javascript" src="{{ asset('vendor/contact-form/jquery.form.js') }}"></script>

        <!-- Theme js -->
        <script type="text/javascript" src="{{ asset('js/theme.js') }}"></script>
        <script type="text/javascript" src="{{ asset('js/map-script.js') }}"></script>
        </body>
        </html>