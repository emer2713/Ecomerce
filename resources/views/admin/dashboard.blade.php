@extends('layouts.admin')
@section('title', 'Dashboard')

@section('content')

    <div class="container-fluid">

        <div class="panel shadow">

            <div class="header">
                <h2 class="title">
                    <i class="fas fa-chart-bar"></i>
                    Estadísticas
                </h2>
            </div>

        </div>

        <div class="row ">

            <div class="col-6 col-md-3 mt16">
                <div class="container-fluid">
                    <div class="panel shadow">
                        <div class="header">
                            <h2 class="title">
                                <i class="fas fa-users">
                                    Usuarios resgistrados
                                </i>
                            </h2>
                        </div>
                        <div class="inside">
                            <div class="big_count">
                                {{ $users }}
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-6 col-md-3 mt16">
                <div class="container-fluid">
                    <div class="panel shadow">
                        <div class="header">
                            <h2 class="title">
                                <i class="fas fa-users">
                                    Subcategorias
                                </i>
                            </h2>
                        </div>
                        <div class="inside">
                            <div class="big_count">
                                {{ $subcategorias }}
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-6 col-md-3 mt16">
                <div class="container-fluid">
                    <div class="panel shadow">
                        <div class="header">
                            <h2 class="title">
                                <i class="fas fa-globe">
                                    Etiquetas
                                </i>
                            </h2>
                        </div>
                        <div class="inside">
                            <div class="big_count">
                                {{ $tags }}
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-6 col-md-3 mt16">
                <div class="container-fluid">
                    <div class="panel shadow">
                        <div class="header">
                            <h2 class="title">
                                <i class="fas fa-users">
                                    Posts
                                </i>
                            </h2>
                        </div>
                        <div class="inside">
                            <div class="big_count">
                                {{ $posts }}
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-6 col-md-3 mt16">
                <div class="container-fluid">
                    <div class="panel shadow">
                        <div class="header">
                            <h2 class="title">
                                <i class="fas fa-globe">
                                    Productos
                                </i>
                            </h2>
                        </div>
                        <div class="inside">
                            <div class="big_count">
                                {{ $products }}
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-6 col-md-3 mt16">
                <div class="container-fluid">
                    <div class="panel shadow">
                        <div class="header">
                            <h2 class="title">
                                <i class="fas fa-globe">
                                    Caruosels
                                </i>
                            </h2>
                        </div>
                        <div class="inside">
                            <div class="big_count">
                                {{ $carousel }}
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>

@endsection
