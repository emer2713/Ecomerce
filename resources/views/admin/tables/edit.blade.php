@extends('layouts.admin')
@section('title','Editar mesa')
@section('breadcrumb')
<li class="breadcrumb-item active">
	<a href="{{route('tables')}}">Mesas</a>
</li>
<li class="breadcrumb-item active">@yield('title')</li>
@endsection
@section('content')
<div class="card">
	<div class="card-header">
	  <h3 class="card-title">Edición de mesa</h3>
    </div>
    {!! Form::model($carousel, ['route'=>['tables_edit',$carousel->id],'method'=>'POST','files' => true]) !!}
	<div class="card-body ">
        @include('admin.tables.form.form')
        <div class="card bg-dark text-white">
          <img class="card-img" src="{{$carousel->image->url}}" alt="Card image">
          <div class="card-img-overlay">
            <h5 class="card-title">Imagen de carrusel</h5>
          </div>
        </div>
	</div>
	<div class="card-footer">
      <a class="btn btn-danger float-right" href="{{route('tables')}}">Cancelar</a>
      <input type="submit" value="Actualizar" class="btn btn-primary">
    </div>
    {!! Form::close() !!}
  </div>
@endsection
