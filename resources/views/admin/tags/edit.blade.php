@extends('layouts.admin')
@section('title','Editar etiqueta')
@section('breadcrumb')
<li class="breadcrumb-item active">
	<a href="{{route('tags')}}">Etiquetas</a>
</li>
<li class="breadcrumb-item active">@yield('title')</li>
@endsection
@section('content')
<div class="card">
	<div class="card-header">
	  <h3 class="card-title">Edición de etiqueta</h3>
    </div>
    {!! Form::model($tag, ['route'=>['tags_edit',$tag->id],'method'=>'POST']) !!}
	<div class="card-body ">
        @include('admin.tags.form.form')
	</div>
	<div class="card-footer">
      <a class="btn btn-danger float-right" href="{{route('tags')}}">Cancelar</a>
      <input type="submit" value="Actualizar" class="btn btn-primary">
    </div>
    {!! Form::close() !!}
  </div>
@endsection
