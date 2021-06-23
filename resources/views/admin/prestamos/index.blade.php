@extends('adminlte::page')

@section('title', 'Prestamos')


@section('content')
   <center>
  <h1>Configuracion de Prestamos</h1>
<p class="mb-2 mt-2">prestamos listados</p>

<div class="container mt-6">
@include('admin.formsCreator.crearPrestamo')
<table class="table-fixed">
  <thead class="border border-gray-400 bg-gray-200">
    <tr>
      <th>#</th>
      <th>Codigo de salida</th>
      <th>Fecha de prestamo salida</th>
      <th>Fecha de prestamo entrada</th>
      <th>Estado</th>
      <th>Usuario</th>
      <th>Equipo</th>
      <th>Acciones</th>
    </tr>
  </thead>
  <tbody>
    <tr>
    @if(!empty($prestamos) && $prestamos->count())
        @foreach($prestamos as $info)
        <td class="border border-gray-400 px-4 py-2 text-gray-800">{{$info->id}}</td>
        <td class="border border-gray-400 px-4 py-2 text-gray-800">{{$info->pres_salida}}</td>
        <td class="border border-gray-400 px-4 py-2 text-gray-800">{{$info->pres_fecha_salida}}</td>
        <td class="border border-gray-400 px-4 py-2 text-gray-800">{{$info->pres_fecha_entrada}}</td>
        <td class="border border-gray-400 px-4 py-2 text-gray-800">{{$info->pres_estatus}}</td>
        <td class="border border-gray-400 px-4 py-2 text-gray-800">{{$info->usuarios_us_id}}</td>
        <td class="border border-gray-400 px-4 py-2 text-gray-800">{{$info->equipos_eq_id}}</td>
      <td class="border border-gray-400 px-4 py-2 text-gray-800">@include('admin.forms.editPrestamo')
      @include('admin.vistasUsuario.verPrestamo') @include('admin.prestamos.delete')</td>
    </tr>
    @endforeach
    @endif
  </tbody>
</table>
<div class="mt-4">
        {{$prestamos->links()}}
  <a href="{{url('/dashboard')}}" class="btn bg-gray-100 rounded-md text-2xl">Volver</a>
</div>
</div>
</center>
@stop

@section('css')
     <link rel="stylesheet" href="/css/admin_custom.css">
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
   <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
   <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
@stop

@section('js')
    <script> console.log('Hi!'); </script>
    <script src="{{ asset('js/ajaxPrestamos.js') }}"></script>
@stop 
