@extends('layouts.admin')
@section('title', 'Editar usuario')
@section('breadcrumb')

    <li class="breadcrumb-item">
        <a href="{{ url('/admin/users/all') }}">
            <i class="fas fa-user-friends"></i>
            Usuarios
        </a>
    </li>
    <li class="breadcrumb-item">
        <a href="{{ url('/admin/user/'.$user->id.'/permissions' ) }}">
            <i class="fas fa-cogs"></i>
            Permisos del usario: {{ $user->name }} {{ $user->lastname }}
        </a>
    </li>
@endsection
@section('content')
    <div class="container-fluid">
        <div class="page_user">
            <div class="row">

                <div class="col-md-4 col-12">
                    <div class="container-fluid">
                        <div class="panel shadow">

                            <div class="header">
                                <h2 class="title">
                                    <i class="fas fa-user"></i>
                                    Información del usuario
                                </h2>
                            </div>

                            <div class="inside">
                                <div class="mini_profile">

                                    @if (is_null($user->avatar))
                                        <img src="{{ url('/media/imagenes/default_avatar.png') }}" class="avatar">
                                    @else
                                        <img src="{{ url('/multimedia/avatar/'.$user->id.'/'.$user->avatar) }}" class="avatar">
                                    @endif

                                    <div class="info">
                                        <span class="title">
                                            <i class="far fa-address-card"></i>
                                            Nombre:
                                        </span>
                                        <span class="text">
                                            {{ $user->name }} {{ $user->lastname }}
                                        </span>
                                        <span class="title">
                                            <i class="fas fa-user-tie"></i>
                                            Role de usuario:
                                        </span>
                                        <span class="text">
                                            {{ getUserStatusArray(null,$user->status) }}
                                        </span>
                                        <span class="title">
                                            <i class="far fa-envelope"></i>
                                            Correo electrónico:
                                        </span>
                                        <span class="text">
                                            {{ $user->email }}
                                        </span>
                                        <span class="title">
                                            <i class="far fa-calendar-alt"></i>
                                            Fecha de registro:
                                        </span>
                                        <span class="text">
                                            {{ $user->created_at  }}
                                        </span>
                                        <span class="title">
                                            <i class="fas fa-user-shield"></i>
                                            Role de usuario:
                                        </span>
                                        <span class="text">
                                            {{ getRoleUserArray(null,$user->role) }}
                                        </span>
                                    </div>
                                    @if (kvfj(Auth::user()->permissions, 'users_banned'))
                                        @if($user->status == "100")
                                            <a href="{{ url('/admin/user/'.$user->id.'/banned') }}" class="btn btn-success mt16">Activar Usuario</a>
                                        @else
                                            <a href="{{ url('/admin/user/'.$user->id.'/banned') }}" class="btn btn-danger mt16">Suspender Usuario</a>
                                        @endif
                                    @endif
                                </div>
                            </div>

                        </div>
                    </div>
                </div>

                <div class="col-md-8 col-12 mt16">
                    <div class="row">

                        <div class="col-md-12">
                            <div class="container-fluid">
                                <div class="panel shadow">

                                    <div class="header">
                                        <h2 class="title">
                                            <i class="fas fa-user-edit"></i>
                                            Editar información del usuario
                                        </h2>
                                    </div>

                                    <div class="inside">

                                        @if (kvfj(Auth::user()->permissions, 'users_edit'))

                                            {!! Form::open(['url', '/admin/user/'.$user->id.'/edit']) !!}

                                                <div class="row">
                                                    <div class="col-md-6">
                                                        <label for="module">Tipo de Usuario</label>
                                                        <div class="input-group">
                                                            <div class="input-group-prepend">
                                                                <span class="input-group-text">
                                                                    <i class="far fa-keyboard"></i>
                                                                </span>
                                                            </div>
                                                            {!! Form::select('user_type', getRoleUserArray('list', null), $user->role, ['class' => 'custom-select']) !!}
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="row mt16">
                                                    <div class="col-md-12">
                                                        {!! Form::submit('Guardar', ['class' => 'btn btn-success']) !!}
                                                    </div>
                                                </div>

                                            {!! Form::close() !!}

                                        @endif

                                    </div>

                                </div>
                            </div>
                        </div>
                        <div class="col-md-6 col-12">
                            <div class="container-fluid mt16">
                                <div class="panel shadow">

                                    <div class="header">
                                        <h2 class="title">
                                            <i class="fas fa-user-edit"></i>
                                            Productos más comprados
                                        </h2>
                                    </div>

                                    <div class="inside">
                                        @foreach ($pvm as $pa )
                                            @foreach ($proall as $pra )
                                                @if ($pa->product_id == $pra->id)
                                                    <p> {{ $pra->name }}</p>
                                                @endif
                                            @endforeach
                                        @endforeach
                                    </div>

                                </div>
                            </div>
                        </div>
                        <div class="col-md-6 col-12">
                            <div class="container-fluid mt16">
                                <div class="panel shadow">

                                    <div class="header">
                                        <h2 class="title">
                                            <i class="fas fa-user-edit"></i>
                                            Productos más vistos
                                        </h2>
                                    </div>

                                    <div class="inside">
                                        @foreach ($pvm as $pa )
                                            @foreach ($proall as $pra )
                                                @if ($pa->product_id == $pra->id)
                                                    <p> {{ $pra->name }}</p>
                                                @endif
                                            @endforeach
                                        @endforeach
                                    </div>

                                </div>
                            </div>
                        </div>

                    </div>
                </div>

            </div>
        </div>
    </div>
@endsection
