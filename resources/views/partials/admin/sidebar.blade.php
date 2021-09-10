<aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="{{ route('web.index') }}" class="brand-link">
      <img src="{!!asset('adminlte/dist/img/AdminLTELogo.png')!!}"
           alt="AdminLTE Logo"
           class="brand-image img-circle elevation-3"
           style="opacity: .8">
      <span class="brand-text font-weight-light">Ch’uhuk Tradition</span>
    </a>
    <!-- Sidebar -->
        <div class="sidebar">
            <!-- Sidebar user (optional) -->
            <div class="user-panel mt-3 pb-3 mb-3 d-flex">
                <div class="image">
                <img src="{!!asset('adminlte/dist/img/user2-160x160.jpg')!!}" class="img-circle elevation-2" alt="User Image">
                </div>
                <div class="info">
                 <a href="#" class="d-block">{!! Auth::user()->name !!}</a>
                </div>
            </div>

            <!-- Sidebar Menu -->
                <nav class="mt-2" s>
                    <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
                        <!-- Add icons to the links using the .nav-icon class
                        with font-awesome or any other icon font library -->

                        @if (kvfj(Auth::user()->permissions, 'dashboard'))
                            {{-- Dashboard    --}}
                            <li class="nav-item has-treeview">
                                <a href="/admin" class="nav-link">
                                    <i class="nav-icon fas fa-tachometer-alt"></i>
                                    <p>
                                        Dashboard
                                    </p>
                                </a>
                            </li>
                        @endif

                        @if (kvfj(Auth::user()->permissions, 'user_list'))
                            {{-- Usuarios    --}}
                            <li class="nav-item has-treeview">
                                <a href="/admin/users/all" class="nav-link">
                                    <i class="nav-icon fas fas fa-users"></i>
                                    <p>
                                        Usuarios
                                    </p>
                                </a>
                            </li>
                        @endif
                        @if (kvfj(Auth::user()->permissions, 'branchoffices'))
                            {{-- branchoffice    --}}
                            <li class="nav-item has-treeview">
                                <a href="#" class="nav-link">
                                <i class="nav-icon fas fa-store-alt"></i>
                                <p>
                                    Sedes
                                    <i class="right fas fa-angle-left"></i>
                                </p>
                                </a>
                                <ul class="nav nav-treeview">
                                    <li class="nav-item">
                                        <a href="{{route('branchoffices_add')}}" class="nav-link">
                                        <i class="far fas fa-plus nav-icon"></i>
                                        <p>Crear</p>
                                        </a>
                                    </li>
                                    <li class="nav-item">
                                        <a href="{{route('branchoffices')}}" class="nav-link">
                                        <i class="far fa-circle nav-icon"></i>
                                        <p>Lista</p>
                                        </a>
                                    </li>
                                </ul>
                            </li>
                        @endif
                        @if (kvfj(Auth::user()->permissions, 'categories'))
                            {{-- Categorias    --}}
                            <li class="nav-item has-treeview">
                                <a href="#" class="nav-link">
                                <i class="nav-icon fas fa-folder-open"></i>
                                <p>
                                    Categorias
                                    <i class="right fas fa-angle-left"></i>
                                </p>
                                </a>
                                <ul class="nav nav-treeview">
                                <li class="nav-item">
                                    <a href="{{route('categories_add')}}" class="nav-link">
                                    <i class="far fas fa-plus nav-icon"></i>
                                    <p>Crear</p>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a href="{{route('categories')}}" class="nav-link">
                                    <i class="far fa-circle nav-icon"></i>
                                    <p>Lista</p>
                                    </a>
                                </li>
                                </ul>
                            </li>
                        @endif

                        @if (kvfj(Auth::user()->permissions, 'subcategories'))
                            {{-- Subcategorias    --}}
                            <li class="nav-item has-treeview">
                                <a href="#" class="nav-link">
                                <i class="nav-icon fas fa-code-branch"></i>
                                <p>
                                    Subcategorias
                                    <i class="right fas fa-angle-left"></i>
                                </p>
                                </a>
                                <ul class="nav nav-treeview">
                                <li class="nav-item">
                                    <a href="{{route('subcategories_add')}}" class="nav-link">
                                    <i class="far fas fa-plus nav-icon"></i>
                                    <p>Crear</p>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a href="{{route('subcategories')}}" class="nav-link">
                                    <i class="far fa-circle nav-icon"></i>
                                    <p>Lista</p>
                                    </a>
                                </li>
                                </ul>
                            </li>
                        @endif

                        @if (kvfj(Auth::user()->permissions, 'tags'))
                            {{-- Tags    --}}
                            <li class="nav-item has-treeview">
                                <a href="#" class="nav-link">
                                    <i class="nav-icon fas fa-tags"></i>
                                <p>
                                Tags
                                    <i class="right fas fa-angle-left"></i>
                                </p>
                                </a>
                                <ul class="nav nav-treeview">
                                <li class="nav-item">
                                    <a href="{{route('tags_add')}}" class="nav-link">
                                    <i class="far fas fa-plus nav-icon"></i>
                                    <p>Crear</p>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a href="{{route('tags')}}" class="nav-link">
                                    <i class="far fa-circle nav-icon"></i>
                                    <p>Lista</p>
                                    </a>
                                </li>
                                </ul>
                            </li>
                        @endif

                        @if (kvfj(Auth::user()->permissions, 'posts'))
                            {{-- Posts    --}}
                            <li class="nav-item has-treeview">
                                <a href="#" class="nav-link">
                                <i class="nav-icon fab fa-blogger"></i>
                                <p>
                                Posts
                                    <i class="right fas fa-angle-left"></i>
                                </p>
                                </a>
                                <ul class="nav nav-treeview">
                                <li class="nav-item">
                                    <a href="{{route('posts_add')}}" class="nav-link">
                                    <i class="far fas fa-plus nav-icon"></i>
                                    <p>Crear</p>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a href="{{route('posts')}}" class="nav-link">
                                    <i class="far fa-circle nav-icon"></i>
                                    <p>Lista</p>
                                    </a>
                                </li>
                                </ul>
                            </li>
                        @endif

                        @if (kvfj(Auth::user()->permissions, 'products'))
                            {{-- Products    --}}
                            <li class="nav-item has-treeview">
                                <a href="#" class="nav-link">
                                <i class="nav-icon fas fa-cookie-bite"></i>
                                <p>
                                Productos
                                    <i class="right fas fa-angle-left"></i>
                                </p>
                                </a>
                                <ul class="nav nav-treeview">
                                <li class="nav-item">
                                    <a href="{{route('products_add')}}" class="nav-link">
                                    <i class="far fas fa-plus nav-icon"></i>
                                    <p>Crear</p>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a href="{{route('products')}}" class="nav-link">
                                    <i class="far fa-circle nav-icon"></i>
                                    <p>Lista</p>
                                    </a>
                                </li>
                                </ul>
                            </li>
                        @endif

                        @if (kvfj(Auth::user()->permissions, 'carousels'))
                            {{-- Carousels    --}}
                            <li class="nav-item has-treeview">
                                <a href="#" class="nav-link">
                                <i class="nav-icon far fa-images"></i>
                                <p>
                                    Carousels
                                    <i class="right fas fa-angle-left"></i>
                                </p>
                                </a>
                                <ul class="nav nav-treeview">
                                    <li class="nav-item">
                                        <a href="{{route('carousels_add')}}" class="nav-link">
                                        <i class="far fas fa-plus nav-icon"></i>
                                        <p>Crear</p>
                                        </a>
                                    </li>
                                    <li class="nav-item">
                                        <a href="{{route('carousels')}}" class="nav-link">
                                        <i class="far fa-circle nav-icon"></i>
                                        <p>Lista</p>
                                        </a>
                                    </li>
                                </ul>
                            </li>
                        @endif

                        @if (kvfj(Auth::user()->permissions, 'boxe'))
                            {{-- Boxe    --}}
                            <li class="nav-item has-treeview">
                                <a href="{{route('boxe')}}" class="nav-link">
                                    <i class="nav-icon fas fa-hand-holding-usd"></i>
                                    <p>
                                        Caja
                                    </p>
                                </a>
                            </li>
                        @endif

                        @if (kvfj(Auth::user()->permissions, 'waiter'))
                            {{-- Waiter    --}}
                            <li class="nav-item has-treeview">
                                <a href="{{route('waiter')}}" class="nav-link">
                                    <i class="nav-icon fas fa-user-tie"></i>
                                    <p>
                                        Piso
                                    </p>
                                </a>
                            </li>
                        @endif

                        @if (kvfj(Auth::user()->permissions, 'bar'))
                            {{-- Bar    --}}
                            <li class="nav-item has-treeview">
                                <a href="{{route('bar')}}" class="nav-link">
                                    <i class="nav-icon fas fa-glass-cheers"></i>
                                    <p>
                                        Barra
                                    </p>
                                </a>
                            </li>
                        @endif

                        @if (kvfj(Auth::user()->permissions, 'kitchen'))
                            {{-- kitchen    --}}
                            <li class="nav-item has-treeview">
                                <a href="{{route('kitchen')}}" class="nav-link">
                                    <i class="nav-icon fas fa-pizza-slice"></i>
                                    <p>
                                        Cocina
                                    </p>
                                </a>
                            </li>
                        @endif

                        @if (kvfj(Auth::user()->permissions, 'tables'))
                            {{-- Tables    --}}
                            <li class="nav-item has-treeview">
                                <a href="#" class="nav-link">
                                <i class="nav-icon fas fa-utensils"></i>
                                <p>
                                    Mesas
                                    <i class="right fas fa-angle-left"></i>
                                </p>
                                </a>
                                <ul class="nav nav-treeview">
                                    <li class="nav-item">
                                        <a href="{{route('tables_add')}}" class="nav-link">
                                        <i class="far fas fa-plus nav-icon"></i>
                                        <p>Crear</p>
                                        </a>
                                    </li>
                                    <li class="nav-item">
                                        <a href="{{route('tables')}}" class="nav-link">
                                        <i class="far fa-circle nav-icon"></i>
                                        <p>Lista</p>
                                        </a>
                                    </li>
                                </ul>
                            </li>
                        @endif

                    </ul>
                </nav>
            <!-- /.sidebar-menu -->
        </div>
    <!-- /.sidebar -->
</aside>
