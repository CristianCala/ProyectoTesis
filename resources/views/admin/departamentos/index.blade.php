@extends('layouts.menu')
@section('content')
<center>


<div class="container mt-6">

<table class="table table-striped table-hover" id="usersTable">
		<thead class="bg-dark text-white">
			<tr>
				<th scope="col">#</th>
				<th scope="col">Nombre</th>
				<th scope="col">Acciones</th>
			</tr>
		</thead>
		<tbody>
			<tr>
      @if(!empty($departamentos) && $departamentos->count())
        @foreach($departamentos as $key)
				<td>{{$key->dep_id}}</td>
				<td>{{$key->dep_nombre}}</td>
				<td>@include('admin.formsEditor.editarDepartamento')</td>
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
@endsection