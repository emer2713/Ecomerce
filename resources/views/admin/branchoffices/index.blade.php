@extends('layouts.admin')
@section('title','Gestión de sedes')
@section('breadcrumb')
<li class="breadcrumb-item active">@yield('title')</li>
@endsection
@section('content')
<div class="card">
	<div class="card-header">
	  <h3 class="card-title">Sección de sedes</h3>
	  <div class="card-tools">
		<a type="button" class="btn btn-tool" href="{{route('branchoffices_add')}}">
            <h3 class="card-title" >Agregar <i class="fas fa-plus"></i></h3>
        </a>
	  </div>
	</div>
	<div class="card-body table-responsive p-0">
	    <table class="table table-head-fixed">
            <thead>
                <tr>
                    <th>Nombre</th>
                    <th>Dirección</th>
                    <th>Telefono</th>
                    <th>Correo</th>
                    <th>Codigo</th>

                    <th colspan="2">&nbsp;</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($branchoffices as $branchoffice)
                <tr>
                    <td>{{$branchoffice->name}}</td>
                    <td>{{$branchoffice->direction}}</td>
                    <td>{{$branchoffice->phone}}</td>
                    <td>{{$branchoffice->email}}</td>
                    <td>{{$branchoffice->code}}</td>

                    <td width="10px">
                        <a class="btn btn-info" href="{{route('branchoffices_edit', $branchoffice->id)}}">
                            <i class="fas fa-edit"></i>
                        </a>
                    </td>
                    <td width="10px">
                        {!! Form::open(['route'=>['branchoffices_delete',$branchoffice->id], 'method'=>'GET']) !!}
                        <button class="btn btn-danger">
                            <i class="fas fa-trash-alt"></i>
                        </button>
                        {!! Form::close() !!}
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
	</div>
	<div class="card-footer">
        {{$branchoffices->render()}}
	</div>
  </div>
@endsection
