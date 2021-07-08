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
  <script src="https://cdn.datatables.net/1.10.25/js/jquery.dataTables.min.js">/<script>
  <script src="{{ asset('js/script.js') }}" defer></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4" crossorigin="anonymous"></script>
  
</head>
<div class="m-4">
  <hgroup class="text-center mb-3">
  <h1 class="fw-bold">EQUIPOS</h1>
  <h2 class="fw-normal h5">Equipos listados</h2>
  </hgroup>
  <div class="text-center table-responsive">
    @include('admin.formsCreator.crearEquipo')
    <table class="table table-striped table-hover" id="equiposTable">
      <thead>
        <tr class="bg-dark text-white">
          <th scope="col">No</th>
          <th scope="col">Serial</th>
          <th scope="col">Tipo de Equipo</th>
          <th scope="col">No Bien Nacional</th>
          <th scope="col">Estado</th>
          <th scope="col">Marca</th>
          <th scope="col">Modelo</th>
          <th scope="col">Departamento</th>
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
  </div>
  <div class="container">
    <div class="row">
      <div class="col-4"></div>
      <div class="col-4">
        <a href="{{url('/dashboard')}}" class="btn btn-primary btn-claro container-fluid fw-bold">Volver</a>
      </div>
      <div class="col-4"></div>
    </div>
  </div>
</div>
@endsection