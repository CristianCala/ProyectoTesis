@extends('layouts.menu')
@section('content')
<head>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
   <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
<link rel="stylesheet" href="https://cdn.datatables.net/1.10.25/css/jquery.dataTables.min.css" >
</head>
<center>
  <h1 class="bg-gray-200">Configuracion de Usuarios</h1>
<p class="mb-2 mt-2">Usuarios listados</p>

<div class="container mt-6">

<table class="table-fixed" id="usersTable">
  <thead class="border border-gray-400 bg-gray-200">
    <tr>
      <th>#</th>
      <th>Nombre</th>
      <th>Apellido</th>
      <th>Cedula</th>
      <th>Email</th>
      <th>usuario</th>
      <th>Estado</th>
      <th>Acciones</th>
    </tr>
  </thead>

</table>
<div class="mt-4">
        {{$users->links()}}
  <a href="{{url('/dashboard')}}" class="btn bg-gray-100 rounded-md text-2xl">Volver</a>
</div>
</div>
</center>
<script src="{{ asset('js/mostrarUsuarios.js') }}"></script>
@endsection