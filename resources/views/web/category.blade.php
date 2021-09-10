@extends('layouts.web')
@section('content')
<div class="breadcrumb">
    <div class="container">
        <div class="breadcrumb-inner">
            <ul class="list-inline list-unstyled">
                <li><a href="{{ route('web.index') }}">Home</a></li>
                <li style="width: 145px;"><p>{{ $subcategory->category->name }}</p></li>
                <li class='active'>{{ $subcategory->name }}</li>
            </ul>
        </div><!-- /.breadcrumb-inner -->
    </div><!-- /.container -->
</div><!-- /.breadcrumb -->


<div class="body-content outer-top-xs">

    <div class='container'>
        <div class='row'>

            <div class="col-xs-12 col-sm-12 col-md-12 ">

                <div class="clearfix filters-container m-t-10">
                    <div class="row">

                        <!-- /.col
                        <div class="col col-sm-12 col-md-5 col-lg-5 hidden-sm">
                        <div class="col col-sm-6 col-md-6 no-padding">
                            <div class="lbl-cnt"> <span class="lbl">Sort by</span>
                            <div class="fld inline">
                                <div class="dropdown dropdown-small dropdown-med dropdown-white inline">
                                <button data-toggle="dropdown" type="button" class="btn dropdown-toggle"> Position <span class="caret"></span> </button>
                                <ul role="menu" class="dropdown-menu">
                                    <li role="presentation"><a href="#">position</a></li>
                                    <li role="presentation"><a href="#">Price:Lowest first</a></li>
                                    <li role="presentation"><a href="#">Price:HIghest first</a></li>
                                    <li role="presentation"><a href="#">Product Name:A to Z</a></li>
                                </ul>
                                </div>
                            </div>
                            </div>
                        </div>
                        </div>-->
                        <!-- /.col -->

                    </div> <!-- /.row -->
                </div>
                <div class="search-result-container ">
                    <div id="myTabContent" class="tab-content category-list">
                        <div class="tab-pane active " id="grid-container">
                            <div class="category-product">
                                <div class="row">
                                    @foreach ($products as $product)
                                        <div class="col-sm-6 col-md-4 col-lg-3">
                                            <div class="item">
                                                <div class="products">
                                                    <div class="product">
                                                        <div class="product-image">
                                                            <div class="image">
                                                                <a href="{{ route('detail', "$product->slug" ) }}">
                                                                    @foreach ($product->images->slice(0, 2) as $image)
                                                                    <img src="{{$image->url}}" class="{{ $loop->first ? '' : 'hover-image' }}" alt="">
                                                                    @endforeach
                                                                </a>
                                                            </div> <!-- /.image -->
                                                        </div>
                                                        <!-- /.product-image -->

                                                        <div class="product-info text-left">
                                                            <h3 class="name"><a href="{{ route('detail', "$product->slug" ) }}">{{ $product->name }}</a></h3>
                                                            <div class="rating rateit-small"></div>
                                                            <div class="description"></div>
                                                            <div class="product-price"> <span class="price"> ${{$product->previousPrice}}  </span> <span class="price-before-discount">$ {{$product->actualPrice}}</span> </div>
                                                            <!-- /.product-price -->
                                                        </div>
                                                    </div> <!-- /.product -->

                                                </div> <!-- /.products -->
                                            </div><!-- /.item -->
                                        </div>  <!-- /.col -->
                                    @endforeach
                                </div> <!-- /.row -->
                            </div>  <!-- /.category-product -->
                        </div> <!-- /.tab-pane-->
                    </div><!-- /#myTabContent -->
                </div>

            </div>  <!-- /.col -->

        </div> <!-- /.row -->
    </div><!-- /.container -->

</div> <!-- /.body-content -->
@endsection
