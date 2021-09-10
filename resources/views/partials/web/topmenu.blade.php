<div class="top-bar animate-dropdown">
    <div class="container">
        <div class="header-top-inner">
            <div class="cnt-account">
                <ul class="list-unstyled">
                    @if (Auth::check())
                        <li class="myaccount"><a href="#"><span><i class="fas fa-user-cog"></i></span></a></li>
                        @if (Auth::user()->checkin == 1)
                            <li class="header_cart ">
                                <div class=" animate-dropdown top-cart-row">
                                    <!-- ============================================================= SHOPPING CART DROPDOWN ============================================================= -->

                                    <div class="dropdown dropdown-cart">
                                        <a href="#" class="dropdown-toggle lnk-cart" data-toggle="dropdown">
                                            <div class="items-cart-inner">
                                                <div class="basket">
                                                    <div class="basket-item-count"><span class="count">0</span></div>
                                                    <div class="total-price-basket"> <span class="value">$0</span> </div>
                                                </div>

                                            </div>
                                        </a>

                                        <ul class="dropdown-menu">
                                            <li>
                                                <div class="cart-item product-summary">
                                                    <div class="row">
                                                        <div class="col-xs-4">
                                                            <div class="image"> <a href="detail.html"><img src="front/assets/images/products/p4.jpg" alt=""></a> </div>
                                                        </div>
                                                        <div class="col-xs-7">
                                                            <h3 class="name"><a href="index8a95.html?page-detail">Simple Product</a></h3>
                                                            <div class="price">$600.00</div>
                                                        </div>

                                                    </div>
                                                </div>
                                                <!-- /.cart-item -->
                                                <div class="clearfix"></div>
                                                <hr>
                                                <div class="clearfix cart-total">
                                                    <div class="pull-right"> <span class="text">Sub Total :</span><span class='price'>$600.00</span> </div>
                                                    <div class="clearfix"></div>
                                                    <a href="checkout.html" class="btn btn-upper btn-primary btn-block m-t-20">Checkout</a>
                                                </div>
                                                <!-- /.cart-total-->
                                            </li>
                                        </ul>
                                        <!-- /.dropdown-menu-->
                                    </div>
                                </div>
                            </li>
                        @endif
                    @endif
                    @if (Auth::check())
                        @if (Auth::user()->role == 1)
                            <li>
                                <a href="{{ url('/admin') }}" data-toggle="tooltip" class="us" data-placement="top" title="Salir" style="padding-left: 5px;">
                                    <i class="fas fa-chalkboard-teacher"></i> Administración
                                </a>
                            </li>
                        @endif
                    @endif
                    @if(Auth::check())
                        <li class="dropdown">
                            <a id="use" href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">
                                <i class="fa fa-user I_m ico_bus" style="color: rgba(0,0,0,0);"></i>
                                @if (is_null(Auth::user()->avatar))
                                    <img src="{{ asset('media/iconos/avatar.png') }}" alt="" class="avatar-user">
                                @else

                                    <img src="{{ asset('multimedia/avatar/'.Auth::user()->id.'/'.Auth::user()->avatar ) }}" alt="" class="avatar-user">

                                @endif
                                <a class="dropdown-item" href="#"
                                onclick="event.preventDefault();
                                            document.getElementById('logout-form').submit();">
                                {{ __('Logout') }}
                            </a>

                            <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                @csrf
                            </form>
                            </a>
                            <ul class="dropdown-menu dropdown-menu-user" role="menu" style=" box-shadow: 0px 0px 1px 0px rgba(0, 0, 0, .15) !important; border-radius: 3px 3px 3px 3px !important;">


                                <li style="width: 100%;  text-align: center;">
                                    <a href="#" class="us" data-toggle="tooltip" data-placement="top" title="Editar Perfil">
                                    <i class="fas fa-cog"></i> Perfil
                                    </a>
                                </li>
                                <li style="width: 100%;  text-align: center;">

                                </li>
                            </ul>
                        </li>
                    @else
                        <li class="dropdown">
                            <a id="use" href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">
                                <i class="fa fa-user I_m ico_bus"></i>
                            </a>
                            <ul class="dropdown-menu dropdown-menu-user" role="menu" style="border-radius: 5px 5px 5px 5px !important; box-shadow: 1px 1px 1px 0px rgba(0, 0, 0, .15) !important;">
                                <li style="text-align: center;"><a href="{{ url('/login') }}" class="us">Iniciar sesión</a></li>
                            </ul>
                        </li>
                    @endif
                </ul>
            </div>

            <!-- /.cnt-account-->

            <div class="cnt-block">
            <ul class="list-unstyled list-inline">
                <li class="dropdown dropdown-small"> <a href="#" class="dropdown-toggle" data-hover="dropdown" data-toggle="dropdown">
                    @if (Auth::check())
                    <span class="value">Hola {{ Auth::user()->name }}</span>
                    @endif
                </li>

            </ul>
            </div>
            <!-- /.list-unstyled -->

            <!-- /.cnt-cart -->
            <div class="clearfix"></div>
        </div>
    </div>
</div>
