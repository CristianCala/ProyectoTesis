<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Ventana hecha con una plantilla blade</title>
          <!-- Fonts -->
          <link href="{{ asset('css/app.css') }}" rel="stylesheet">
</head>
<body>
<center>
	<h1 class="bg-gray-200 text-6xl">Hola</h1>
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
      <td class="border border-gray-400 px-4 py-2 text-gray-800"><button class="mb-4 bg-green-600">boton</button> <button class="mb-4 bg-green-600">boton</button></td>
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
</body>
</html>