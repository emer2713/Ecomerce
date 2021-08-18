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
        <title>{{ config('app.name', 'EFD') }} @yield('title')</title>


        <!-- Bootstrap Core CSS -->

        {!! Html::style('front/assets/css/bootstrap.min.css') !!}


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
                     <!--include('partials.web.mainheader')-->
                <!-- ============================================== MAIN HEADER: END ============================================== -->
                @include('layouts._nav')

            </header>
        <!-- ============================================== HEADER: END ============================================== -->

        @yield('content')

        <!-- ============================================================= FOOTER ============================================================= -->
            @include('partials.web.footer')
        <!-- ============================================================= FOOTER : END============================================================= -->

        <!-- JavaScripts placed at the end of the document so the pages load faster -->
        {!! Html::script('front/assets/js/jquery-1.11.1.min.js') !!}
        {!! Html::script('front/assets/js/bootstrap.min.js') !!}
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
