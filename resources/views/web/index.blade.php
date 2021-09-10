@extends('layouts.web')
@section('title', 'inicio')
@section('content')
    <div class="body-content outer-top-vs" id="top-banner-and-menu">
        <div class="container">
            <div class="row">
                <!-- ============================================== SIDEBAR ============================================== -->
                    <div class="col-xs-12 col-sm-12 col-md-3 sidebar">

                        <!-- ============================================== HOT DEALS ============================================== -->
                            @include('partials.web._hot-deals')
                        <!-- ============================================== HOT DEALS: END ============================================== -->


                        <!-- ============================================== categories ============================================== -->
                        @include('web._categories')
                        <!-- ============================================== categories: END ============================================== -->

                    </div>
                <!-- ============================================== SIDEBAR : END ============================================== -->

                <!-- ============================================== CONTENT ============================================== -->
                    <div class="col-xs-12 col-sm-12 col-md-9 homebanner-holder">

                        <!-- ========================================== SECTION – HERO ========================================= -->
                            @include('partials.web._hero')
                        <!-- ========================================= SECTION – HERO : END ========================================= -->

                        <!-- ============================================== SCROLL TABS ============================================== -->
                            <!--include('partials.web.scrolltabs')-->
                        <!-- ============================================== SCROLL TABS : END ============================================== -->

                        <!-- ============================================== featured ============================================== -->
                            @include('partials.web._featured')
                        <!-- ============================================== featured : END ============================================== -->

                    </div>
                <!-- ============================================== CONTENT : END ============================================== -->
            </div>
        </div>
    </div>
@endsection
