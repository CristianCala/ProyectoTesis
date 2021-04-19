<!DOCTYPE html>
<html>
<head>
	<title>Ventana hecha con una plantilla Blade</title>
	 <link href="{{ asset('css/app.css') }}" rel="stylesheet">
</head>
<body>
<center>
	<h1 class="bg-gray-200">Hola</h1>
<p class="mb-2 mt-2">margen</p>

<div class="container mt-6">

<table class="table">
  <thead>
    <tr>
      <th>Maquina</th>
      <th>Sistema Operativo</th>
      <th>Direccion I.P.</th>
      <th>Navegador</th>
      <th>Fecha</th>
    </tr>
  </thead>
  <tbody>
    <tr>
      @if(!empty($prestamos) && $prestamos->count())
        @foreach($prestamos as $key)
      <td class="border border-gray-400 px-4 py-2 text-gray-800">{{$key->pres_salida}}</td>
      <td class="border border-gray-400 px-4 py-2 text-gray-800">{{$key->pres_fecha_salida}}</td>
      <td class="border border-gray-400 px-4 py-2 text-gray-800">{{$key->pres_fecha_entrada}}</td>
      <td class="border border-gray-400 px-4 py-2 text-gray-800">{{$key->pres_estatus}}</td>
      <td class="border border-gray-400 px-4 py-2 text-gray-800"><button class="mb-4 bg-green-600">boton</button> <button class="mb-4 bg-green-600">boton</button></td>
    </tr>
    @endforeach
    @endif
  </tbody>
</table>
<div class="mt-4">
          {{$prestamos->links()}}
  <a href="{{url('/dashboard')}}" class="btn bg-blue-400 mt-6">Volver</a>
</div>
</div>
</center>
</body>
</html>