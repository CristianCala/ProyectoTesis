@extends('layouts.menu')
@section('content')
<head>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
	<script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
	<link rel="stylesheet" href="https://cdn.datatables.net/1.10.25/css/jquery.dataTables.min.css" >
	<script src="{{ asset('js/ajaxPrestamos.js') }}"></script>
	<script src="{{ asset('js/mostrarPrestamos.js') }}"></script>
	<script src="https://cdn.datatables.net/1.10.25/js/jquery.dataTables.min.js"></script>
</head>
<hgroup class="text-center">
<h1 class="fw-bold">Préstamos</h1>
<h2 class="fw-normal h5">Lista de préstamos</h2>
</hgroup>
@include('admin.formsCreator.crearPrestamo')
<div class="text-center table-responsive">
	<table class="table table-striped table-hover" id="prestamosTable">
		<thead>
			<tr class="bg-dark text-white">
				<th scope="col">#</th>
				<th scope="col">Código de salida</th>
				<th scope="col">Fecha de préstamo</th>
				<th scope="col">Fecha de devolución</th>
				<th scope="col">Usuario</th>
				<th scope="col">Equipo</th>
				<th scope="col">Estado</th>
				<th scope="col">Acciones</th>
			</tr>
		</thead>
		<tbody>
			<tr>
				@if(!empty($equipment) && $equipment->count())
				@foreach($equipment as $key)
				<td>{{$key->id}}</td>
				<td>{{$key->marcas_mar_id}}</td>
				<td>{{$key->modelos_mdl_id}}</td>
				<td>{{$key->eq_serial}}</td>
				<td>{{$key->eq_tequid}}</td>
				<td>{{$key->eq_nbiennacional}}</td>
				<td>{{$key->eq_estatus}}</td>
				<td>{{$key->departamentos_dep_id}}</td>
				<td>@include('admin.forms.editEquipo')</td>
			</tr>
			@endforeach
			@endif
		</tbody>
	</table>
	<div class="mt-4">
		
		<a href="{{url('/dashboard')}}" class="btn bg-gray-100 rounded-md text-2xl">Volver</a>
	</div>
</div>
@endsection