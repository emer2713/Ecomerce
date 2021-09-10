@extends('layouts.admin')
@section('title','Gestión de categorías')
@section('breadcrumb')
    <li class="breadcrumb-item active">@yield('title')</li>
@endsection
@section('content')
<div class="card">
	<div class="card-header">
	  <h3 class="card-title">Sección de categorías</h3>
	  <div class="card-tools">
		<a type="button" class="btn btn-tool" href="{{route('categories_add')}}">
            <h3 class="card-title" >Agregar <i class="fas fa-plus"></i></h3>
        </a>
	  </div>
	</div>
	<div class="card-body table-responsive p-0">

		<ul class="nav nav-tabs">
			@foreach (getModulesArray() as $module => $item)
			<li class="nav-item">
				<a class="nav-link " href="{{route('categories.module', $module)}}">{{$item}}</a>
			</li>
			@endforeach
		</ul>

	  <table class="table">
		  <thead>
			  <tr>
				  <th scope="col">ID</th>
				  <th>Nombre</th>
                  <th>En Portada</th>
                  <th colspan="2">&nbsp;</th>
			  </tr>
		  </thead>
		  <tbody>
			  @foreach ($categories as $category)
			<tr>
                <td scope="row">{{$category->id}}</td>
                <td>{{$category->name}}</td>
                <td>{{$category->front}}</td>
			  	<td width="2px">
					<a class="btn btn-info" href="{{route('categories_edit', $category->id)}}">
                        <i class="fas fa-edit"></i>
                    </a>
				</td>
				<td width="2px">
					{!! Form::open(['route'=>['categories_delete',$category->id], 'method'=>'GET']) !!}
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
        {{$categories->render()}}
    </div>
  </div>
@endsection
