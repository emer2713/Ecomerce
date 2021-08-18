<aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="../../index3.html" class="brand-link">
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
                {{--  <a href="#" class="d-block">{!! Auth::user()->name !!}</a>  --}}
                </div>
            </div>

            <!-- Sidebar Menu -->
                <nav class="mt-2">
                    <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
                    <!-- Add icons to the links using the .nav-icon class
                        with font-awesome or any other icon font library -->


                        {{-- Dashboard    --}}
                        <li class="nav-item has-treeview">
                            <a href="/admin" class="nav-link">
                                <i class="nav-icon fas fa-tachometer-alt"></i>
                                <p>
                                    Dashboard
                                </p>
                            </a>
                        </li>


                    {{-- Categorias    --}}
                    <li class="nav-item has-treeview">
                        <a href="#" class="nav-link">
                        <i class="nav-icon fas fa-users"></i>
                        <p>
                            Categorias
                            <i class="right fas fa-angle-left"></i>
                        </p>
                        </a>
                        <ul class="nav nav-treeview">
                        <li class="nav-item">
                            <a href="{{route('categories.create')}}" class="nav-link">
                            <i class="far fas fa-plus nav-icon"></i>
                            <p>Crear</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="{{route('categories.index')}}" class="nav-link">
                            <i class="far fa-circle nav-icon"></i>
                            <p>Lista</p>
                            </a>
                        </li>
                        </ul>
                    </li>

                    {{-- Subcategorias    --}}
                    <li class="nav-item has-treeview">
                        <a href="#" class="nav-link">
                        <i class="nav-icon fas fa-users"></i>
                        <p>
                            Subcategorias
                            <i class="right fas fa-angle-left"></i>
                        </p>
                        </a>
                        <ul class="nav nav-treeview">
                        <li class="nav-item">
                            <a href="{{route('subcategories.create')}}" class="nav-link">
                            <i class="far fas fa-plus nav-icon"></i>
                            <p>Crear</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="{{route('subcategories.index')}}" class="nav-link">
                            <i class="far fa-circle nav-icon"></i>
                            <p>Lista</p>
                            </a>
                        </li>
                        </ul>
                    </li>
                    {{-- Tags    --}}
                    <li class="nav-item has-treeview">
                        <a href="#" class="nav-link">
                        <i class="nav-icon fas fa-users"></i>
                        <p>
                        Tags
                            <i class="right fas fa-angle-left"></i>
                        </p>
                        </a>
                        <ul class="nav nav-treeview">
                        <li class="nav-item">
                            <a href="{{route('tags.create')}}" class="nav-link">
                            <i class="far fas fa-plus nav-icon"></i>
                            <p>Crear</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="{{route('tags.index')}}" class="nav-link">
                            <i class="far fa-circle nav-icon"></i>
                            <p>Lista</p>
                            </a>
                        </li>
                        </ul>
                    </li>
                    {{-- Posts    --}}
                    <li class="nav-item has-treeview">
                        <a href="#" class="nav-link">
                        <i class="nav-icon fas fa-users"></i>
                        <p>
                        Posts
                            <i class="right fas fa-angle-left"></i>
                        </p>
                        </a>
                        <ul class="nav nav-treeview">
                        <li class="nav-item">
                            <a href="{{route('posts.create')}}" class="nav-link">
                            <i class="far fas fa-plus nav-icon"></i>
                            <p>Crear</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="{{route('posts.index')}}" class="nav-link">
                            <i class="far fa-circle nav-icon"></i>
                            <p>Lista</p>
                            </a>
                        </li>
                        </ul>
                    </li>
                    {{-- Products    --}}
                    <li class="nav-item has-treeview">
                        <a href="#" class="nav-link">
                        <i class="nav-icon fas fa-users"></i>
                        <p>
                        Productos
                            <i class="right fas fa-angle-left"></i>
                        </p>
                        </a>
                        <ul class="nav nav-treeview">
                        <li class="nav-item">
                            <a href="{{route('products.create')}}" class="nav-link">
                            <i class="far fas fa-plus nav-icon"></i>
                            <p>Crear</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="{{route('products.index')}}" class="nav-link">
                            <i class="far fa-circle nav-icon"></i>
                            <p>Lista</p>
                            </a>
                        </li>
                        </ul>
                    </li>
                    {{-- Carousels    --}}
                    <li class="nav-item has-treeview">
                        <a href="#" class="nav-link">
                        <i class="nav-icon fas fa-users"></i>
                        <p>
                            Carousels
                            <i class="right fas fa-angle-left"></i>
                        </p>
                        </a>
                        <ul class="nav nav-treeview">
                        <li class="nav-item">
                            <a href="{{route('carousels.create')}}" class="nav-link">
                            <i class="far fas fa-plus nav-icon"></i>
                            <p>Crear</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="{{route('carousels.index')}}" class="nav-link">
                            <i class="far fa-circle nav-icon"></i>
                            <p>Lista</p>
                            </a>
                        </li>
                        </ul>
                    </li>
                    {{-- Programas   --}}
                    {{--  <li class="nav-item has-treeview">
                        <a href="#" class="nav-link">
                        <i class="nav-icon fas fa-hourglass-start"></i>
                        <p>
                            Programas
                            <i class="right fas fa-angle-left"></i>
                        </p>
                        </a>
                        <ul class="nav nav-treeview">
                        <li class="nav-item">
                            <a href="{{route('programs.create')}}" class="nav-link">
                            <i class="far fa-circle nav-icon"></i>
                            <p>Crear</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="{{route('programs.index')}}" class="nav-link">
                            <i class="far fa-circle nav-icon"></i>
                            <p>Lista</p>
                            </a>
                        </li>
                        </ul>
                    </li>  --}}
                    {{-- Videos  --}}
                    {{--  <li class="nav-item has-treeview">
                        <a href="#" class="nav-link">
                        <i class="nav-icon fas fa-video"></i>
                        <p>
                            Videos
                            <i class="right fas fa-angle-left"></i>
                        </p>
                        </a>
                        <ul class="nav nav-treeview">
                        <li class="nav-item">
                            <a href="{{route('videos.create')}}" class="nav-link">
                            <i class="far fa-circle nav-icon"></i>
                            <p>Crear</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="{{route('videos.index')}}" class="nav-link">
                            <i class="far fa-circle nav-icon"></i>
                            <p>Lista</p>
                            </a>
                        </li>
                        </ul>
                    </li>  --}}


                    </ul>
                </nav>
            <!-- /.sidebar-menu -->
        </div>
    <!-- /.sidebar -->
</aside>
