@extends('layouts.web')
@section('title', 'detalle de producto')
@section('content')

    <div class="breadcrumb">
        <div class="container">
            <div class="breadcrumb-inner">
                <ul class="list-inline list-unstyled">
                    <li><a href="{{ route('web.index') }}">Home</a></li>
                    <li style="width: 145px;"><p>{{ $product->subcategory->name }}</p></li>
                    <li class='active'>{{ $product->name }}</li>
                </ul>
            </div><!-- /.breadcrumb-inner -->
        </div><!-- /.container -->
    </div><!-- /.breadcrumb -->

    <div class="body-content outer-top-xs">
        <div class='container'>
            <div class='row single-product'>
                <div class='visible-lg visible-md col-md-3 sidebar'>
                    <div class="sidebar-module-container">

                        <!-- ============================================== HOT DEALS ============================================== -->
                            @include('partials.web._hot-deals')
                        <!-- ============================================== HOT DEALS: END ============================================== -->
                    </div>
                </div><!-- /.sidebar -->

                <div class='col-xs-12 col-sm-12 col-md-9 rht-col'>
                    <div class="detail-block">
                        <div class="row">
                            <div class="col-xs-12 col-sm-12 col-md-4 col-lg-4 gallery-holder">
                                <div class="product-item-holder size-big single-product-gallery small-gallery">

                                    <div id="owl-single-product">
                                        @foreach ($product->images as $image)
                                        <div class="single-product-gallery-item" id="slide1">
                                            <a data-lightbox="image-1" data-title="Gallery" href="{{$image->url}}">
                                                <img class="img-responsive" alt="" src="{{$image->url}}" data-echo="{{$image->url}}" />
                                            </a>
                                        </div><!-- /.single-product-gallery-item -->
                                        @endforeach
                                    </div><!-- /.single-product-slider -->


                                    <div class="single-product-gallery-thumbs gallery-thumbs">

                                        <div id="owl-single-product-thumbnails">

                                            <div class="item">
                                                <a class="horizontal-thumb active" data-target="#owl-single-product" data-slide="1" href="#slide1">
                                                    <img class="img-responsive" alt="" src="marazzo/assets/images/blank.gif" data-echo="marazzo/assets/images/products/p1.jpg" />
                                                </a>
                                            </div>

                                        </div><!-- /#owl-single-product-thumbnails -->

                                    </div><!-- /.gallery-thumbs -->

                                </div><!-- /.single-product-gallery -->
                            </div><!-- /.gallery-holder -->

                            <div class='col-sm-12 col-md-8 col-lg-8 product-info-block'>
                                <div class="product-info">
                                    <h1 class="name">{{ $product->name }}</h1>

                                    <div class="rating-reviews m-t-20">
                                        <div class="row">
                                        <div class="col-lg-12">
                                            <div class="pull-left">
                                                <div class="rating rateit-small"></div>
                                            </div>
                                            <div class="pull-left">
                                                <div class="reviews">
                                                    <a href="#" class="lnk">(13 Reviews)</a>
                                                </div>
                                            </div>
                                            </div>
                                        </div><!-- /.row -->
                                    </div><!-- /.rating-reviews -->

                                    <div class="stock-container info-container m-t-10">
                                        <div class="row">
                                        <div class="col-lg-12">
                                            <div class="pull-left">
                                                <div class="stock-box">
                                                    <span class="label">Availability :</span>
                                                </div>
                                            </div>
                                            <div class="pull-left">
                                                <div class="stock-box">
                                                    @if ($product->stock > 0 )
                                                        <span class="value">Disponible</span>
                                                    @else
                                                        <span class="value">No disponible</span>
                                                    @endif

                                                </div>
                                            </div>
                                            </div>
                                        </div><!-- /.row -->
                                    </div><!-- /.stock-container -->

                                    <div class="description-container m-t-20">
                                        {!! html_entity_decode($product->longDescription, ENT_QUOTES | ENT_XML1, 'UTF-8') !!}
                                    </div><!-- /.description-container -->

                                    <div class="price-container info-container m-t-30">
                                        <div class="row">


                                            <div class="col-sm-6 col-xs-6">
                                                <div class="price-box">
                                                    <span class="price">${{ $product->previousPrice }}</span>
                                                    <span class="price-strike">${{ $product->actualPrice }}</span>
                                                </div>
                                            </div>

                                            <div class="col-sm-6 col-xs-6">
                                                <div class="favorite-button m-t-5">
                                                  <!--  <a class="btn btn-primary" data-toggle="tooltip" data-placement="right" title="Wishlist" href="#">
                                                        <i class="fa fa-heart"></i>
                                                    </a>
                                                    <a class="btn btn-primary" data-toggle="tooltip" data-placement="right" title="Add to Compare" href="#">
                                                        <i class="fa fa-signal"></i>
                                                    </a>
                                                    <a class="btn btn-primary" data-toggle="tooltip" data-placement="right" title="E-mail" href="#">
                                                        <i class="fa fa-envelope"></i>
                                                    </a> -->
                                                </div>
                                            </div>

                                        </div><!-- /.row -->
                                    </div><!-- /.price-container -->
                                    @if(Auth::check())
                                    @if (Auth::user()->checkin == 1)
                                    <form method="post" action="{{ route('purchased.product', "$product->sku") }}">
                                        {{ csrf_field() }}
                                        <div class="quantity-container info-container">
                                            <div class="row">

                                                <div class="qty">
                                                    <span class="label">Qty :</span>
                                                </div>

                                                <div class="qty-count visible-sm-block ">
                                                    <div class="cart-quantity">
                                                        <input name="sku" class="" type="text" value="{{ $product->sku  }}" min="1" max="1000" step="1" class="numb" />
                                                    </div>
                                                </div>

                                                <div class="qty-count">
                                                    <div class="cart-quantity">
                                                        <input name="quantity_{{ $product->sku  }}" class="" type="number" value="1" min="1" max="100" step="1" class="numb" />
                                                    </div>
                                                </div>

                                                <div class="add-btn">
                                                    <input type="submit"  class="btn btn-primary">
                                                </div>

                                            </div><!-- /.row -->
                                        </div><!-- /.quantity-container -->
                                    </form>
                                    @endif

                                    @endif



                                </div><!-- /.product-info -->
                            </div><!-- /.col-sm-7 -->
                        </div><!-- /.row -->
                    </div>

                    <div class="product-tabs inner-bottom-xs">
                        <div class="row">
                            <div class="col-sm-12 col-md-3 col-lg-3">
                                <ul id="product-tabs" class="nav nav-tabs nav-tab-cell">
                                    <li class="active"><a data-toggle="tab" href="#description">Descripción</a></li>
                                    <li><a data-toggle="tab" href="#review">Comentarios</a></li>
                                </ul><!-- /.nav-tabs #product-tabs -->
                            </div>
                            <div class="col-sm-12 col-md-9 col-lg-9">

                                <div class="tab-content">

                                    <div id="description" class="tab-pane in active">
                                        <div class="product-tab">
                                            <p class="text">{!! html_entity_decode($product->longDescription, ENT_QUOTES | ENT_XML1, 'UTF-8') !!}</p>
                                        </div>
                                    </div><!-- /.tab-description -->

                                    <div id="review" class="tab-pane">
                                        <div class="product-tab">

                                            <div class="product-reviews">
                                                <h4 class="title">Reseñas</h4>

                                                <div class="reviews">
                                                    <div class="review">
                                                        <div class="review-title">
                                                            <span class="summary">Nombre de la reseña</span>
                                                            <span class="date"><i class="fa fa-calendar"></i>
                                                            <span>1 days ago</span></span>
                                                        </div>
                                                        <div class="text">
                                                            "{!! html_entity_decode('reseña...................'.$product->shortDescription, ENT_QUOTES | ENT_XML1, 'UTF-8') !!}"
                                                        </div>
                                                    </div>
                                                </div><!-- /.reviews -->
                                            </div><!-- /.product-reviews -->



                                            <div class="product-add-review">
                                                <h4 class="title">Escribe tu propio comentario</h4>
                                                <div class="review-table">
                                                    <div class="table-responsive">
                                                        <table class="table">
                                                            <thead>
                                                                <tr>
                                                                    <th class="cell-label">&nbsp;</th>
                                                                    <th>1 star</th>
                                                                    <th>2 stars</th>
                                                                    <th>3 stars</th>
                                                                    <th>4 stars</th>
                                                                    <th>5 stars</th>
                                                                </tr>
                                                            </thead>
                                                            <tbody>
                                                                <tr>
                                                                    <td class="cell-label">Cantidad</td>
                                                                    <td><input type="radio" name="quality" class="radio" value="1"></td>
                                                                    <td><input type="radio" name="quality" class="radio" value="2"></td>
                                                                    <td><input type="radio" name="quality" class="radio" value="3"></td>
                                                                    <td><input type="radio" name="quality" class="radio" value="4"></td>
                                                                    <td><input type="radio" name="quality" class="radio" value="5"></td>
                                                                </tr>
                                                                <tr>
                                                                    <td class="cell-label">Precio</td>
                                                                    <td><input type="radio" name="quality" class="radio" value="1"></td>
                                                                    <td><input type="radio" name="quality" class="radio" value="2"></td>
                                                                    <td><input type="radio" name="quality" class="radio" value="3"></td>
                                                                    <td><input type="radio" name="quality" class="radio" value="4"></td>
                                                                    <td><input type="radio" name="quality" class="radio" value="5"></td>
                                                                </tr>
                                                                <tr>
                                                                    <td class="cell-label">Valor</td>
                                                                    <td><input type="radio" name="quality" class="radio" value="1"></td>
                                                                    <td><input type="radio" name="quality" class="radio" value="2"></td>
                                                                    <td><input type="radio" name="quality" class="radio" value="3"></td>
                                                                    <td><input type="radio" name="quality" class="radio" value="4"></td>
                                                                    <td><input type="radio" name="quality" class="radio" value="5"></td>
                                                                </tr>
                                                            </tbody>
                                                        </table><!-- /.table .table-bordered -->
                                                    </div><!-- /.table-responsive -->
                                                </div><!-- /.review-table -->

                                                <div class="review-form">
                                                    <div class="form-container">
                                                        <form class="cnt-form">

                                                            <div class="row">
                                                                <div class="col-sm-6">
                                                                    <div class="form-group">
                                                                        <label for="exampleInputName">Nombre <span class="astk">*</span></label>
                                                                        <input type="text" class="form-control txt" id="exampleInputName" placeholder="">
                                                                    </div><!-- /.form-group -->
                                                                    <div class="form-group">
                                                                        <label for="exampleInputSummary">Titulo de comentario<span class="astk">*</span></label>
                                                                        <input type="text" class="form-control txt" id="exampleInputSummary" placeholder="">
                                                                    </div><!-- /.form-group -->
                                                                </div>

                                                                <div class="col-md-6">
                                                                    <div class="form-group">
                                                                        <label for="exampleInputReview">Comentario<span class="astk">*</span></label>
                                                                        <textarea class="form-control txt txt-review" id="exampleInputReview" rows="4" placeholder=""></textarea>
                                                                    </div><!-- /.form-group -->
                                                                </div>
                                                            </div><!-- /.row -->

                                                            <div class="action text-right">
                                                                <button class="btn btn-primary btn-upper">Enviar</button>
                                                            </div><!-- /.action -->

                                                        </form><!-- /.cnt-form -->
                                                    </div><!-- /.form-container -->
                                                </div><!-- /.review-form -->

                                            </div><!-- /.product-add-review -->

                                        </div><!-- /.product-tab -->
                                    </div><!-- /.tab-review -->

                                </div><!-- /.tab-content -->
                            </div><!-- /.col -->
                        </div><!-- /.row -->
                    </div><!-- /.product-tabs -->

                </div><!-- /.col -->
                <div class="clearfix"></div>
            </div><!-- /.row -->
        </div><!-- /.container -->
    </div><!-- /.body-content -->


@endsection
@section('scripts')

@endsection
