@extends('adminlte::page')
@section('title', 'Auditoria')
@section('content')
<div class="m-4">
	<div class="p-4 card border-rad shadow">
		<hgroup class="text-center mb-3">
		<h1 class="fw-bold">CONFIGURACIÓN DE PRÉSTAMOS</h1>
		<h2 class="h5 fw-normal">Lista de préstamos</h2>
		</hgroup>
		<div class="text-center table-responsive">
			@include('admin.formsCreator.crearPrestamo')
			<table id="table-vive" class="table table-striped table-hover">
				<thead>
					<tr class="bg-dark text-white">
						<th class="col">No.</th>
						<th scope="col">Nombre</th>
						<th scope="col">Acción</th>
					</tr>
				</thead>
				<tbody>
					<tr class="text-muted">
						<td>{{$info->id}}</td>
						<td>{{$info->pres_salida}}</td>
						<td>
							@include('admin.forms.editPrestamo')
							@include('admin.vistasUsuario.verPrestamo') @include('admin.prestamos.delete')
						</td>
					</tr>
					@endforeach
					@endif
				</tbody>
			</table>
			<div class="container">
				<div class="row">
					<div class="col-4"></div>
					<div class="col-4">
						{{$prestamos->links()}}
						<a href="{{url('/dashboard')}}" class="btn btn-primary btn-claro container-fluid fw-bold">Volver</a>
					</div>
					<div class="col-4"></div>
				</div>
			</div>
		</div>
	</div>
</div>
@stop
@section('css')
<link rel="stylesheet" href="/css/admin_custom.css">
<link href="{{ asset('css/app.css') }}" rel="stylesheet">
<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
@stop
@section('js')
<script> console.log('Hi!'); </script>
<script src="{{ asset('js/ajaxPrestamos.js') }}"></script>
@stop