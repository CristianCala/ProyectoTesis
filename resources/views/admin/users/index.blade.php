@extends('adminlte::page')

<<<<<<< HEAD
@section('title', 'Usuarios')

@section('content_header')
    <h1>Dashboard</h1>
@stop
=======
@section('title', 'Dashboard')
>>>>>>> 070bdc088875dc6afdc42bf8d91d687df636ef80

@section('content')
<center>
  <h1 class="bg-gray-200">Configuracion de Usuarios</h1>
<p class="mb-2 mt-2">Usuarios listados</p>

<div class="container mt-6">
@include('admin.formsCreator.crearUsuario')
<table class="table-fixed">
  <thead class="border border-gray-400 bg-gray-200">
    <tr>
      <th>#</th>
      <th>Nombre</th>
      <th>Email</th>
      <th>Acciones</th>
    </tr>
  </thead>
  <tbody>
    <tr>
    @if(!empty($users) && $users->count())
        @foreach($users as $key)
         <td class="border border-gray-400 px-4 py-2 text-gray-800">{{$key->id}}</td>
      <td class="border border-gray-400 px-4 py-2 text-gray-800">{{$key->name}}</td>
      <td class="border border-gray-400 px-4 py-2 text-gray-800">{{$key->email}}</td>
      <td class="border border-gray-400 px-4 py-2 text-gray-800">@include('admin.forms.editUser')  @include('admin.vistasUsuario.verUsuario')</td>
    </tr>
    @endforeach
    @endif
  </tbody>
</table>
<div class="mt-4">
        {{$users->links()}}
  <a href="{{url('/dashboard')}}" class="btn bg-gray-100 rounded-md text-2xl">Volver</a>
</div>
</div>
</center>
@stop

@section('css')
<<<<<<< HEAD
<link rel="stylesheet" href="/css/admin_custom.css">
=======
    <link rel="stylesheet" href="/css/admin_custom.css">
>>>>>>> 070bdc088875dc6afdc42bf8d91d687df636ef80
   <link href="{{ asset('css/app.css') }}" rel="stylesheet">
   <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
   <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
@stop

@section('js')
    <script> console.log('Hi!'); </script>
<<<<<<< HEAD
    <script src="{{ asset('js/ajax.js') }}"></script>
=======
>>>>>>> 070bdc088875dc6afdc42bf8d91d687df636ef80
@stop 
