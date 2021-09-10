@extends('layouts.admin')
@section('title','Crear mesa')
@section('breadcrumb')
<li class="breadcrumb-item active">
	<a href="{{route('tables')}}">Mesas</a>
</li>
<li class="breadcrumb-item active">@yield('title')</li>
@endsection
@section('content')
<div class="card">
	<div class="card-header">
	  <h3 class="card-title">Registro de Mesa</h3>
    </div>
    {!! Form::open(['route'=>'tables_add', 'method'=>'POST','files' => true]) !!}
    @csrf
	<div class="card-body ">
        @include('admin.tables.form.form')
	</div>
	<div class="card-footer">
      <a class="btn btn-danger float-right" href="{{route('tables')}}">Cancelar</a>
      {!! Form::submit('Guardar', ['class' => 'btn btn-success mt16']) !!}

    </div>
    {!! Form::close() !!}
</div>
@endsection
