@extends('layouts.admin')
@section('title','Crear carrusel')
@section('breadcrumb')
<li class="breadcrumb-item active">
	<a href="{{route('carousels')}}">Carrusel</a>
</li>
<li class="breadcrumb-item active">@yield('title')</li>
@endsection
@section('content')
<div class="card">
	<div class="card-header">
	  <h3 class="card-title">Registro de carrusel</h3>
    </div>
    {!! Form::open(['route'=>'carousels_add', 'method'=>'POST','files' => true]) !!}
    @csrf
	<div class="card-body ">
        @include('admin.carousels.form.form')
	</div>
	<div class="card-footer">
      <a class="btn btn-danger float-right" href="{{route('carousels')}}">Cancelar</a>
      {!! Form::submit('Guardar', ['class' => 'btn btn-success mt16']) !!}

    </div>
    {!! Form::close() !!}
  </div>
@endsection
