        <!-- Fonts -->
        <link href="{{ asset('css/app.css') }}" rel="stylesheet">

<table class="table-fixed">
  <thead>
    <tr>
      <th class="w-1/2 ...">Nombre</th>
      <th class="w-1/4 ...">Email</th>

    </tr>
  </thead>
  <tbody>
    <tr>
    @if($users)
        @foreach($users as $key)
      <td>{{$key->name}}</td>
      <td>{{$key->email}}</td>
    </tr>
    @endforeach
        @endif
  </tbody>
</table>