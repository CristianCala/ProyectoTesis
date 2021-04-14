<div>
        <!-- Fonts -->
        <link href="{{ asset('css/app.css') }}" rel="stylesheet">
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
  
        @foreach($departamentos as $key)
      <td class="border border-gray-400 px-4 py-2 text-gray-800">{{$key->dep_nombre}}</td>
      <td class="border border-gray-400 px-4 py-2 text-gray-800">{{$key->dep_descripcion}}</td>
    </tr>
    @endforeach

  </tbody>
</table>
<div class="mt-4">

</div>
</div>
</div>
