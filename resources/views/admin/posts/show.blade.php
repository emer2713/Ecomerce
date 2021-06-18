@extends('layouts.admin')
@section('title','Detalles publicación')
@section('breadcrumb')
<li class="breadcrumb-item active">
	<a href="{{route('posts.index')}}">Publicaciones</a>
</li>
<li class="breadcrumb-item active">@yield('title')</li>
@endsection
@section('content')
<div class="card">
	<div class="card-header">
	  <h3 class="card-title">Detalle de publicación</h3>
    </div>
	<div class="card-body ">
        <div class="row">
            <div class="col-lg-8">
              <h1 class="mt-4">{{$post->name}}</h1>
              <p class="lead">
                Redactado por
                <strong >{{$post->user->name}}</strong>
              </p>
              <hr>
              <p>Publicado el {{$post->updated_at->format('d/m/y')}}</p>
              <hr>
              <img class="img-fluid rounded" src="{{$post->image->url}}" alt="">
              <hr>
              <p class="lead">{{$post->abstract}}</p>
              <p>
                {!!htmlspecialchars_decode($post->body)!!}
              </p>
              <hr>
            </div>
            <div class="col-md-4">
              <div class="card my-4">
                <h5 class="card-header">Categoría</h5>
                <div class="card-body">
                  <div class="row">
                    <div class="col-lg-6">
                      <ul class="list-unstyled mb-0">
                        <li>
                            {{$post->category->name}}
                        </li>
                      </ul>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
	</div>
	<div class="card-footer">
      <a class="btn btn-primary" href="{{route('posts.index')}}">Regresar</a>
    </div>
  </div>
@endsection