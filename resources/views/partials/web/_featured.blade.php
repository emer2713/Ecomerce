<!-- ============================================== FEATURED PRODUCTS ============================================== -->
<section class="section new-arriavls">
  <h3 class="section-title">Lo más pedido</h3>
  <div class="owl-carousel home-owl-carousel custom-carousel owl-theme outer-top-xs">
    @foreach ($productsFeatured as $productFeatured)
    <div class="item item-carousel">
        <div class="products">
          <div class="product">
            <div class="product-image">
              <div class="image">
                    <a href="{{ route('detail', "$productFeatured->slug" ) }}">
                        @foreach ($productFeatured->images->slice(0, 2) as $image)
                        <img src="{{$image->url}}" class="{{ $loop->first ? '' : 'hover-image' }}" alt="">
                        @endforeach
                    </a>

                    </div>
              <!-- /.image -->


            </div>
            <!-- /.product-image -->

            <div class="product-info text-left">
              <h3 class="name"><a href="{{ route('detail', "$productFeatured->slug" ) }}">{{$productFeatured->name}}</a></h3>
              <div class="rating rateit-small"></div>
              <div class="description"></div>
              <div class="product-price"> <span class="price"> ${{$productFeatured->previousPrice}} </span> </div>
              <!-- /.product-price -->

            </div>
            <!-- /.product-info -->

            <!-- /.cart -->
          </div>
          <!-- /.product -->

        </div>
        <!-- /.products -->
      </div>
    @endforeach
  </div>
</section>
<!-- ============================================== FEATURED PRODUCTS : END ============================================== -->
