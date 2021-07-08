@extends('layouts.menu')
@section('content')


<head>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
<link rel="stylesheet" href="https://cdn.datatables.net/1.10.25/css/jquery.dataTables.min.css" >
<script src="{{ asset('js/ajaxEquipo.js') }}"></script>
<script src="{{ asset('js/mostrarEquipos.js') }}"></script>
    <script src="https://cdn.datatables.net/1.10.25/js/jquery.dataTables.min.js"></script>
		<script src="{{ asset('js/script.js') }}" defer></script>

		<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4" crossorigin="anonymous"></script>
 
</head>
<center>
  <h1>Menu de equipos</h1>
<p class="mb-2 mt-2">Equipos listados</p>

<div class="container mt-6">
@include('admin.formsCreator.crearEquipo')
<table class="table-fixed" id="equiposTable">
  <thead class="border border-gray-400 bg-gray-200">
    <tr>
    <th>#</th>
    <th>Serial</th>
    <th>Tipo de equipo</th>
    <th>N° Bien nacional</th>
    <th>Estado</th>
    <th>Marca</th>
    <th>Modelo</th>
      <th>Departamento</th>
      <th>Acciones</th>
    </tr>
  </thead>
  <!--tbody>
    <tr>
    @if(!empty($equipment) && $equipment->count())
        @foreach($equipment as $key)
        <td class="border border-gray-400 px-4 py-2 text-gray-800">{{$key->id}}</td>
      <td class="border border-gray-400 px-4 py-2 text-gray-800">{{$key->marcas_mar_id}}</td>
      <td class="border border-gray-400 px-4 py-2 text-gray-800">{{$key->modelos_mdl_id}}</td>
      <td class="border border-gray-400 px-4 py-2 text-gray-800">{{$key->eq_serial}}</td>
      <td class="border border-gray-400 px-4 py-2 text-gray-800">{{$key->eq_tequid}}</td>
      <td class="border border-gray-400 px-4 py-2 text-gray-800">{{$key->eq_nbiennacional}}</td>
      <td class="border border-gray-400 px-4 py-2 text-gray-800">{{$key->eq_estatus}}</td>
      <td class="border border-gray-400 px-4 py-2 text-gray-800">{{$key->departamentos_dep_id}}</td>
      <td class="border border-gray-400 px-4 py-2 text-gray-800">@include('admin.forms.editEquipo')</td>
    </tr>
    @endforeach
    @endif
  </tbody-->
</table>
<div class="mt-4">
       
  <a href="{{url('/dashboard')}}" class="btn bg-gray-100 rounded-md text-2xl">Volver</a>
</div>
</div>
</center>
@endsection