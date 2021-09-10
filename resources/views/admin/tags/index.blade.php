@extends('layouts.admin')
@section('title','Gestión de etiquetas ')
@section('breadcrumb')
<li class="breadcrumb-item active">@yield('title')</li>
@endsection
@section('content')
<div class="card">
	<div class="card-header">
	  <h3 class="card-title">Sección de etiquetas</h3>
	  <div class="card-tools">
		<a type="button" class="btn btn-tool" href="{{route('tags_add')}}">
            <h3 class="card-title" >Agregar <i class="fas fa-plus"></i></h3>
        </a>
	  </div>
	</div>
	<div class="card-body table-responsive p-0">
	  <table class="table table-head-fixed">
		  <thead>
			  <tr>
				  <th scope="col">ID</th>
				  <th>Nombre</th>
				  <th colspan="2">&nbsp;</th>
			  </tr>
		  </thead>
		  <tbody>
			  @foreach ($tags as $tag)
			<tr>
				  <th scope="row">{{$tag->id}}</td>
				  <td>{{$tag->name}}</td>
			  	<td width="10px">
					<a class="btn btn-info" href="{{route('tags_edit', $tag->id)}}">
						<i class="fas fa-edit"></i>
					</a>
				</td>
				<td width="10px">
					{!! Form::open(['route'=>['tags_delete',$tag->id], 'method'=>'GET']) !!}
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
        {{$tags->render()}}
	</div>
  </div>
@endsection
