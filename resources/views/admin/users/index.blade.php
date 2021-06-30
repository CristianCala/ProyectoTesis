@extends('adminlte::page')
@section('title', 'Usuarios')
@section('content_header')
<div class="m-4">
	<div class="p-4 card border-rad shadow">
		<hgroup class="text-center mb-3">
		<h1 class="fw-bold">DASHBOARD</h1>
		<h2 class="h5 fw-normal">Lista de Usuarios</h2>
		</hgroup>
		<div class="text-center table-responsive">
			@include('admin.formsCreator.crearUsuario')
			<table id="table-vive" class="table table-striped table-hover">
				<thead>
					<tr class="bg-dark text-white">
						<th class="col">No.</th>
						<th scope="col">Usuario</th>
						<th scope="col">Email</th>
						<th scope="col">Acciones</th>
					</tr>
				</thead>
				<tbody>
					<tr class="text-muted">
						@if(!empty($users) && $users->count())
						@foreach($users as $key)
						<td>{{$key->id}}</td>
						<td>{{$key->usuario}}</td>
						<td>{{$key->email}}</td>
						<td>
							@include('admin.forms.editUser')  @include('admin.vistasUsuario.verUsuario')
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
						{{$users->links()}}
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
<script src="{{ asset('js/ajax.js') }}"></script>
@stop