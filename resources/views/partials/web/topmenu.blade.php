<div class="top-bar animate-dropdown">
    <div class="container">
    <div class="header-top-inner">
        <div class="cnt-account">
        <ul class="list-unstyled">
            <li class="myaccount"><a href="#"><span><i class="fas fa-user-cog"></i></span></a></li>
            <li class="header_cart hidden-xs"><a href="#"><span><i class="fas fa-shopping-cart"></i></span></a></li>

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
                    @if ( Auth::user()->role == "1" )

                        <li>
                            <a href="{{ url('/admin') }}" data-toggle="tooltip" class="us" data-placement="top" title="Salir" style="padding-left: 5px;">
                                <i class="fas fa-chalkboard-teacher"></i> Administración
                            </a>
                        </li>
                        <li><hr class="dropdown-divider"></li>
                    @endif

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
        <!-- /.cnt-account

        <div class="cnt-block">
        <ul class="list-unstyled list-inline">
            <li class="dropdown dropdown-small"> <a href="#" class="dropdown-toggle" data-hover="dropdown" data-toggle="dropdown"><span class="value">USD </span><b class="caret"></b></a>
            <ul class="dropdown-menu">
                <li><a href="#">USD</a></li>
                <li><a href="#">INR</a></li>
                <li><a href="#">GBP</a></li>
            </ul>
            </li>
            <li class="dropdown dropdown-small lang"> <a href="#" class="dropdown-toggle" data-hover="dropdown" data-toggle="dropdown"><span class="value">English </span><b class="caret"></b></a>
            <ul class="dropdown-menu">
                <li><a href="#">English</a></li>
                <li><a href="#">French</a></li>
                <li><a href="#">German</a></li>
            </ul>
            </li>
        </ul> -->
        <!-- /.list-unstyled -->
        </div>
        <!-- /.cnt-cart -->
        <div class="clearfix"></div>
    </div>
    <!-- /.header-top-inner -->
    </div>
    <!-- /.container -->
</div>
