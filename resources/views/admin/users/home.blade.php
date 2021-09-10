@extends('layouts.admin')
@section('title', 'Usuarios')
@section('breadcrumb')

    <li class="breadcrumb-item">
        <a href="{{ url('/admin/users/all') }}">
            <i class="fas fa-user-friends"></i>
            Usuarios
        </a>
    </li>

@endsection
@section('content')

    <div class="container-fluid">
        <div class="panel shadow">

            <div class="header">
                <h2 class="title">
                    <i class="fas fa-user-friends"></i>
                    Usuarios
                </h2>
                <div class="col-md-12" style="margin-bottom: 10px;">
                    {!! Form::text('search', null, ['class' => 'form-control', 'placeholder' => 'Ingrese su busqueda', 'required', 'id' => 'usersearch']) !!}
                </div>
            </div>

            <div class="inside">

                <div class="row mt16">
                    <div class="col-md-2 offset-md-10">
                        <div class="dropdown">
                            <button  style="width:100%" class="btn btn-primary dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <i class="fas fa-filter"  style="margin-right: 3px;"></i>Filtrar
                            </button>
                            <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                                <a href="{{ url('/admin/users/all') }}" class="dropdown-item"><i class="fas fa-stream"  style="margin-right: 3px;"></i>Todos</a>
                                <a href="{{ url('/admin/users/0') }}" class="dropdown-item"><i class="fas fa-unlink"  style="margin-right: 3px;"></i>No verificados</a>
                                <a href="{{ url('/admin/users/1') }}" class="dropdown-item"><i class="fas fa-user-check"  style="margin-right: 3px;"></i>verificados</a>
                                <a href="{{ url('/admin/users/100') }}" class="dropdown-item"><i class="fas fa-heart-broken"  style="margin-right: 3px;"></i>Suspendidos</a>
                            </div>
                        </div>
                    </div>
                </div>

                <div id="buscador_usersearch" style="width: 100%;"></div>
                <table class="table mt16" style="    overflow: auto;">
                    <thead >
                        <tr>
                            <td style="text-align: center;">Avatar</td>
                            <td style="text-align: center;">Nombre</td>
                            <td style="text-align: center;">Apellidos</td>
                            <td style="text-align: center;">Email</td>
                            <td style="text-align: center;">Estado</td>
                            <td style="text-align: center;">Role</td>
                            <td></td>
                        </tr>
                    </thead>
                    <tbody >
                        @foreach ($users as $user)
                            <tr>
                                <td width="64">

                                    @if (is_null($user->avatar))
                                        <img src="{{ asset('media/iconos/contacto.png') }}" alt="" class="img-fluid rounded-circle">
                                    @else

                                        <img src="{{ asset('multimedia/avatar/'.$user->id.'/'.$user->avatar ) }}" alt="" class="img-fluid rounded-circle">

                                    @endif

                                </td>
                                <td style="text-align: center;">{{ $user->name }}</td>
                                <td style="text-align: center;">{{ $user->lastname }}</td>
                                <td style="text-align: center;">{{ $user->email }}</td>
                                <td style="text-align: center;">{{ getUserStatusArray(null, $user->status) }}</td>
                                <td style="text-align: center;">{{ getRoleUserArray(null, $user->role) }}</td>
                                <td style="text-align: center;">
                                    <div class="opts">
                                        @if (kvfj(Auth::user()->permissions, 'users_edit'))
                                            <a href="{{ url('/admin/user/'.$user->id.'/edit') }}" data-toggle="tooltip" data-placement="top" title="Editar">
                                                <i class="fas fa-edit" style="color: #ffc107;"></i>
                                            </a>
                                        @endif
                                        @if (kvfj(Auth::user()->permissions, 'users_permissions'))
                                            <a href="{{ url('/admin/user/'.$user->id.'/permissions') }}" data-toggle="tooltip" data-placement="top" title="Permisos de usuario">
                                                <i class="fas fa-cogs" style="color: #343a40;"></i>
                                            </a>
                                        @endif
                                    </div>
                                </td>
                            </tr>
                        @endforeach
                        <tr>
                            <td colspan="6">{!! $users->render() !!}</td>
                        </tr>
                    </tbody>
                </table>

            </div>

        </div>
    </div>

@endsection

@section('scripts')

    <script>
        window.addEventListener('load',function(){
                document.getElementById("usersearch").addEventListener("keyup", () => {
                    if((document.getElementById("usersearch").value.length)>1)
                        fetch(`/user/buscador?texto=${document.getElementById("usersearch").value}`,{ method:'get' })
                        .then(response  =>  response.text() )
                        .then(html      =>  {   document.getElementById("buscador_usersearch").innerHTML = html  })
                    else
                        document.getElementById("buscador_usersearch").innerHTML = ""
                })
            });
    </script>

@endsection
