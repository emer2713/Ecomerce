@extends('layouts.admin')
@section('title','Cocina')
@section('breadcrumb')
<li class="breadcrumb-item active">@yield('title')</li>
@endsection
@section('content')
<div class="card">
	<div class="card-header">
	  <h3 class="card-title">Cocina</h3>
	  <div class="card-tools">
		<a type="button" class="btn btn-tool" href="#">
            <h3 class="card-title" >Agregar <i class="fas fa-plus"></i></h3>
        </a>
	  </div>
	</div>
	<div class="card-body table-responsive p-0">
	  <table class="table table-head-fixed">
		  <thead>
			  <tr>
				  <th scope="col">ID</th>
				  <th>Encabezado</th>
				  <th>Texto</th>
				  <th>Extracto</th>
				  <th>Botón</th>
				  <th>Imagen</th>
				  <th colspan="2">&nbsp;</th>
			  </tr>
		  </thead>
		  <tbody>

		  </tbody>
	  </table>

	</div>
	<div class="card-footer">

	</div>
  </div>
@endsection
