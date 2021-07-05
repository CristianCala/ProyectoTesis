@extends('layouts.menu')
@section('content')

<head>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
<script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
<link rel="stylesheet" href="https://cdn.datatables.net/1.10.25/css/jquery.dataTables.min.css" >
</head>
<center>
  <h1>Menu de prestamos</h1>
<p class="mb-2 mt-2">Prestamos listados</p>

<div class="container mt-6">
@include('admin.formsCreator.crearPrestamo')
<table class="table-fixed" id="prestamosTable">
  <thead class="border border-gray-400 bg-gray-200">
    <tr>
    <th>#</th>
      <th>Codigo de salida</th>
      <th>Fecha de prestamo salida</th>
      <th>Fecha de prestamo entrada</th>
      <th>Usuario</th>
      <th>Equipo</th>
      <th>Estado</th>
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
    <script src="{{ asset('js/ajaxPrestamos.js') }}"></script>

<script src="{{ asset('js/mostrarPrestamos.js') }}"></script>
    <script src="https://cdn.datatables.net/1.10.25/js/jquery.dataTables.min.js"></script>  
@endsection