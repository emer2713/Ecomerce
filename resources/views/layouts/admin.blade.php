<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
	<head>
		<meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <meta name="csrf-token" content="{{ csrf_token() }}">
        <meta name="routeName" content="{{ Route::currentRouteName() }}">
        <link rel="icon" type="image/png" href="/media/iconos/logo.png" />
        <title>{{ config('app.name', 'EFD') }} @yield('title')</title>

        <!-- Font Awesome -->
            {!! Html::style('adminlte/plugins/fontawesome-free/css/all.min.css') !!}
        <!-- Ionicons -->
            {!! Html::style('adminlte/plugins/ekko-lightbox/ekko-lightbox.css') !!}
            <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
        <!-- overlayScrollbars -->
            {!! Html::style('adminlte/dist/css/adminlte.min.css') !!}
        <!-- Google Font: Source Sans Pro -->
            <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700" rel="stylesheet">
        <!-- Include CSS  -->
            <link rel="stylesheet" href="{{ url('/css/admin.css?v='.time()) }}">
            @yield('style')
    </head>
    <body class="hold-transition sidebar-mini">

        <!-- Site wrapper -->
            <div class="wrapper">

                <!-- Navbar -->
                    @include('partials.admin.nav')
                <!-- /.navbar -->

                <!-- Main Sidebar Container -->
                    @include('partials.admin.sidebar')
                <!-- /.Main Sidebar Container -->

                <!-- Content Wrapper. Contains page content -->
                    @include('partials.admin.wrapper')
                <!-- /.content-wrapper -->

                <!-- Footer
                    include('partials.admin.footer')
                 /.footer -->
            </div>
        <!-- ./wrapper -->

        {!! Html::script('https://unpkg.com/axios/dist/axios.min.js') !!}
        {!! Html::script('https://cdn.jsdelivr.net/npm/sweetalert2@9') !!}
        {!! Html::script('adminlte/plugins/jquery/jquery.min.js') !!}
        {!! Html::script('adminlte/plugins/bootstrap/js/bootstrap.bundle.min.js')!!}
        {!! Html::script('adminlte/plugins/filterizr/jquery.filterizr.min.js') !!}
        {!! Html::script('adminlte/plugins/ekko-lightbox/ekko-lightbox.min.js') !!}
        {!! Html::script('js/app.js') !!}
        {!! Html::script('adminlte/dist/js/adminlte.min.js') !!}
        {!! Html::script('adminlte/dist/js/demo.js') !!}
        {!! Html::script('adminlte/plugins/filterizr/jquery.filterizr.min.js') !!}
        @yield('scripts')
        <script>
            $(function () {
                $(document).on('click', '[data-toggle="lightbox"]', function(event) {
                event.preventDefault();
                $(this).ekkoLightbox({
                    alwaysShowClose: true
                });
                });

                $('.filter-container').filterizr({gutterPixels: 3});
                $('.btn[data-filter]').on('click', function() {
                $('.btn[data-filter]').removeClass('active');
                $(this).addClass('active');
                });
            })
        </script>
         <script>
            $('.alert').slideDown();
            setTimeout(function() {
                $('.alert').slideUp();
            }, 3000);
        </script>
    </body>
</html>
