
@extends('layouts.menu')
@section('content')
@if(Auth::User()->us_rol_id==1)
<h1 class="fw-bold">Bienvenido! {{Auth::user()->usuario}}</h1>
	<p>Este es un modal de administrador</p>
	@endif

	@if(Auth::User()->us_rol_id==2)
<h1 class="fw-bold">Bienvenido! {{Auth::user()->usuario}}</h1>
	<p>Este es un modal de moderador</p>
	@endif
@if(Auth::User()->us_rol_id==3)
	<h1 class="fw-bold">Bienvenido! {{Auth::user()->usuario}}</h1>
	<p>Este es un modal de usuario regular</p>
@endif
@endsection