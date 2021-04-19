<!DOCTYPE html>
<html>
<head>
	<title>Ventana hecha con una plantilla Blade</title>
	 <link href="{{ asset('css/app.css') }}" rel="stylesheet">
   <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
</head>
<body>
<center>
	<h1 class="bg-gray-200">Configuracion de Usuarios</h1>
<p class="mb-2 mt-2">Usuarios listados</p>

<div class="container mt-6">

<table class="table-fixed rounded-sm">
  <thead class="border border-gray-400 bg-gray-200">
    <tr>
      <th>Nombre</th>
      <th>Email</th>
      <th>Acciones</th>
    </tr>
  </thead>
  <tbody>
    <tr>
    @if(!empty($users) && $users->count())
        @foreach($users as $key)
      <td class="border border-gray-400 px-4 py-2 text-gray-800">{{$key->name}}</td>
      <td class="border border-gray-400 px-4 py-2 text-gray-800">{{$key->email}}</td>
      <td class="border border-gray-400 px-4 py-2 text-gray-800"><button class="mb-4 bg-yellow-200 rounded-md">boton</button> <button class="mb-4 bg-blue-400 rounded-md">boton</button></td>
    </tr>
    @endforeach
    @endif
  </tbody>
</table>
<div class="mt-4">
	      {{$users->links()}}
  <a href="{{url('/dashboard')}}" class="btn bg-gray-100 rounded-md">Volver</a>
</div>
</div>
</center>
</body>
</html>