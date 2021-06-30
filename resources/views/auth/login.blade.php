<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
	<head>
		<meta charset="UTF-8">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<title>Login</title>
		<!-- estilos propios -->
		<link rel="stylesheet" type="text/css" href="css/stylesLogin.css">
		<!-- Bootstrap 5 -->
		<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
		<!-- Fontawesome -->
		<link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous"/>
	</head>
	<body>
		<main class="m-0 vh-100 row justify-content-center align-items-center">
			<form class="card tamaño-form p-5" action="{{ route('login') }}" method="post">
				@csrf
				<div class="text-center mb-3">
					<img src="img/IconoVive.svg" width="150" height="150" alt="">
				</div>
				<h1 class="text-center h2 fw-bold">Iniciar Sesión</h1>
				<!-- input -->
				<div class="container mb-3">
					<input class="form-control" id="email" placeholder="Email" type="email" name="email" :value="old('email')" autofocus required>
					<i class="icon-move far fa-envelope fa-lg"></i>
				</div>
				<!-- input -->
				<div class="container">
					<input class="form-control" type="password"id="password" class="block mt-1 w-full" name="password" :value="old('password')" required autofocus>
					<i class="icon-move fas fa-lock fa-lg"></i>
				</div>
				<!-- input -->
				<div class="form-check form-switch container mx-4 mt-2">
					<input class="form-check-input" type="checkbox" id="flexSwitchCheckChecked" checked>
					<label class="form-check-label" for="flexSwitchCheckChecked">Recuérdame</label>
				</div>
				<!-- input -->
				<div class="container d-grid mt-3">
					<input class="btn btn-primary" value="Aceptar" type="submit" name="submit">
				</div>
				<footer class="container mt-4 text-center">
				@if (Route::has('password.request'))
					<a href="{{ route('password.request') }}">Olvidaste tu contraseña?</a>
                @endif
				</footer>
			</form>
		</main>
		<script src="js/scriptLogin.js"></script>
		<!-- Bootstrap 5 Js -->
		<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4" crossorigin="anonymous"></script>
	</body>
</html>
