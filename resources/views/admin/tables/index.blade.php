@extends('layouts.admin')
@section('title','Gestión de mesas')
@section('breadcrumb')
<li class="breadcrumb-item active">@yield('title')</li>
@endsection
@section('content')
<div class="card">
	<div class="card-header">
	  <h3 class="card-title">Sección de mesas</h3>
	  <div class="card-tools">
		<a type="button" class="btn btn-tool" href="{{route('tables_add')}}">
            <h3 class="card-title" >Agregar <i class="fas fa-plus"></i></h3>
        </a>
	  </div>
	</div>
	<div class="card-body table-responsive p-0">
	  <table class="table table-head-fixed">
		  <thead>
			  <tr>
				  <th scope="col">ID</th>
				  <th>Número</th>
				  <th>Sede</th>
				  <th colspan="2">&nbsp;</th>
			  </tr>
		  </thead>
		  <tbody>
			  @foreach ($tables as $table)
			<tr>
				  <th scope="row">{{$table->id}}</td>
				  <td>{{$table->name}}</td>
				  <td>{{$table->branchoffice->name }}</td>
			  	<td width="10px">
					<a class="btn btn-info" href="{{route('tables_edit', $table->id)}}">
						<i class="fas fa-edit"></i>
					</a>
				</td>
				<td width="10px">
					{!! Form::open(['route'=>['tables_delete',$table->id], 'method'=>'GET']) !!}
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
        {{$tables->render()}}
	</div>
  </div>
@endsection
