@extends('adminlte::page')

@section('title', 'Dashboard')

@section('content')
<center>
  <h1>Hola</h1>
<p class="mb-2 mt-2">margen</p>

<div class="container mt-6">

<table class="table">
  <thead>
    <tr>
      <th>Nombre</th>
      <th>Email</th>
    </tr>
  </thead>
  <tbody>
  <tr>
      @if(!empty($departamentos) && $departamentos->count())
        @foreach($departamentos as $key)
        <td class="border border-gray-400 px-4 py-2 text-gray-800">{{$key->dep_nombre}}</td>
      <td class="border border-gray-400 px-4 py-2 text-gray-800">{{$key->dep_descripcion}}</td>
      <td class="border border-gray-400 px-4 py-2 text-gray-800">@include('admin.forms.editDepartamento') </td>
    </tr>
    @endforeach
    @endif
  </tbody>
</table>
<div class="mt-4">
          {{$departamentos->links()}}
          <a href="{{url('/dashboard')}}" class="btn bg-gray-100 rounded-md text-2xl">Volver</a>
</div>
</div>
</div>

</center>
@stop

@section('css')
          <link href="{{ asset('css/app.css') }}" rel="stylesheet">
@stop

@section('js')
    <script src="{{ asset('js/ajaxDepartamento.js') }}"></script>
@stop 

