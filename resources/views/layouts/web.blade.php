<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

    <head>
        <!-- Meta -->
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
        <meta name="description" content="">
        <meta name="author" content="">
        <meta name="keywords" content="MediaCenter, Template, eCommerce">
        <meta name="robots" content="all">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <meta name="csrf-token" content="{{ csrf_token() }}">
        <link rel="icon" type="image/png" href="/media/iconos/logo.png" />
        <title>{{ config('app.name', 'Ch’uhuk Tradition') }} @yield('title')</title>


        <!-- Bootstrap Core CSS -->
        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.12/css/all.css">
        <!-- Latest compiled and minified CSS -->
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css" integrity="sha384-HSMxcRTRxnN+Bdg0JdbxYKrThecOKuH5zCYotlSAcp1+c8xmyTe9GYg1l9a69psu" crossorigin="anonymous">
        <!-- Customizable CSS -->
        {!! Html::style('front/assets/css/main.css') !!}
        {!! Html::style('front/assets/css/blue.css') !!}
        {!! Html::style('front/assets/css/owl.carousel.css') !!}
        {!! Html::style('front/assets/css/owl.transitions.css') !!}
        {!! Html::style('front/assets/css/animate.min.css') !!}
        {!! Html::style('front/assets/css/rateit.css') !!}
        {!! Html::style('front/assets/css/bootstrap-select.min.css') !!}

        <!-- Icons/Glyphs -->
        {!! Html::style('front/assets/css/font-awesome.css') !!}

        <!-- Fonts -->
        {!! Html::style('https://fonts.googleapis.com/css?family=Barlow:200,300,300i,400,400i,500,500i,600,700,800') !!}
        {!! Html::style('http://fonts.googleapis.com/css?family=Roboto:300,400,500,700') !!}
        {!! Html::style('https://fonts.googleapis.com/css?family=Open+Sans:400,300,400italic,600,600italic,700,700italic,800') !!}
        {!! Html::style('https://fonts.googleapis.com/css?family=Montserrat:400,700') !!}
        <link rel="stylesheet" href="{{ url('/css/blog.css?v='.time()) }}">

    </head>
    <body class="cnt-home">
        <!-- ============================================== HEADER ============================================== -->
            <header class="header-style-1">

                <!-- ============================================== TOP MENU ============================================== -->
                    @include('partials.web.topmenu')
                <!-- ============================================== TOP MENU : END ============================================== -->

                <!-- ============================================== MAIN HEADER ============================================== -->
                    @include('partials.web.mainheader')
                <!-- ============================================== MAIN HEADER: END ============================================== -->
                    <!--include('layouts._nav') -->

            </header>
        <!-- ============================================== HEADER: END ============================================== -->

        @yield('content')

        <!-- ============================================================= FOOTER ============================================================= -->
            @include('partials.web.footer')
        <!-- ============================================================= FOOTER : END============================================================= -->

        <!-- JavaScripts placed at the end of the document so the pages load faster -->
        <script src="https://kit.fontawesome.com/b0d8aefb17.js" crossorigin="anonymous"></script>
        {!! Html::script('front/assets/js/jquery-1.11.1.min.js') !!}
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js" integrity="sha384-aJ21OjlMXNL5UyIl/XNwTMqvzeRMZH2w8c5cRVpzpU8Y5bApTppSuUkhZXN0VxHd" crossorigin="anonymous"></script>
        {!! Html::script('front/assets/js/bootstrap-hover-dropdown.min.js') !!}
        {!! Html::script('front/assets/js/owl.carousel.min.js') !!}
        {!! Html::script('front/assets/js/echo.min.js') !!}
        {!! Html::script('front/assets/js/jquery.easing-1.3.min.js') !!}
        {!! Html::script('front/assets/js/bootstrap-slider.min.js') !!}
        {!! Html::script('front/assets/js/jquery.rateit.min.js') !!}
        {!! Html::script('front/assets/js/lightbox.min.js') !!}
        {!! Html::script('front/assets/js/bootstrap-select.min.js') !!}
        {!! Html::script('front/assets/js/wow.min.js') !!}
        {!! Html::script('front/assets/js/scripts.js') !!}
    </body>

</html>
