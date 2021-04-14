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
  
        @foreach($users as $user)
      <td class="border border-gray-400 px-4 py-2 text-gray-800">{{$user->name}}</td>
      <td class="border border-gray-400 px-4 py-2 text-gray-800">{{$user->email}}</td>
    </tr>
    @endforeach

  </tbody>
</table>
<div class="mt-4">

</div>
</div>
</div>
