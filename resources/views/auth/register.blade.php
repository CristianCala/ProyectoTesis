<!DOCTYPE html>
<html>
	<head>
		<meta charset="UTF-8">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<title>Registro de Usuario</title>
		<!-- estilos propios -->
		<link rel="stylesheet" type="text/css" href="css/stylesRegister.css">
		<!-- Bootstrap 5 -->
		<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
		<!-- Fontawesome -->
		<link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous"/>
		<!-- Google font -->
		<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Karla">
	</head>
	<body>
		<main class="m-0 vh-100 row justify-content-center align-items-center">
			<!-- cotenedor del card -->
			<div class="container card tamaño-form py-3 bg-logo">
				<div class="row p-3">
					<!-- columna 1 -->
					<div class="col-md-4 bg-logo mt-5">
						<div class="mt-3 text-center">
							<img src="img/IconoVive.svg" class="bounce" width="150" height="150" alt="Icono Vive">
							<hgroup>
							<h1 class="text-white fw-bold h3 mt-2">Bienvenido</h1>
							<h2 class="text-white h6 text-center mt-3 mx-3">Bienvenidos a los sistemas contables de ViveTv</h2>
							</hgroup>
							<div class="d-grid mt-5">
								<h5 class="text-white h6 fw-bold">Ya tienes una cuenta?</h5>
								<a class="btn btn-light btn-oscuro mt-2 mx-5 fw-bold" href="{{ route('login') }}">Iniciar Sesión</a>
							</div>
						</div>
					</div>
					<!-- columna 2 -->
					<div class="col-md-8 bg-form p-5 mt-3">
						<h2 class="fw-bold text-center mb-5">Registro de Usuario</h2>
						<form method="POST" action="{{ route('register') }}">
							@csrf
							<div class="container">
								<div class="row row-cols-2">
									<div class="col">
										<div class="mb-4">
											@error('nombre')
											<label class="text-danger">{{$message}}</label>
											@enderror
											<input class="form-control" placeholder="Nombre* " type="text" type="text" name="nombre" id="nombre" :value="old('nombre')" required autofocus autocomplete="name">
										</div>
									</div>
									<div class="col">
										<div class="mb-4">
											@error('apellido')
											<label class="text-danger">{{$message}}</label>
											@enderror
											<input class="form-control" placeholder="Apellido* " type="text" name="apellido" :value="old('apellido')" required autofocus autocomplete="apellido">
										</div>
									</div>
									<div class="col">
										<div class="mb-4">
											@error('cedula')
											<label class="text-danger">{{$message}}</label>
											@enderror
											<input class="form-control" placeholder="Cedula* " type="number" id="cedula" name="cedula" :value="old('cedula')" required>
										</div>
									</div>
									<div class="col">
										<div class="mb-4">
											@error('email')
											<label class="text-danger">{{$message}}</label>
											@enderror
											<input class="form-control" placeholder="Email*" id="email" type="email" name="email" :value="old('email')" required>
										</div>
									</div>
									<div class="col">
										<div class="mb-4">
											@error('usuario')
											<label class="text-danger">{{$message}}</label>
											@enderror
											<input class="form-control" placeholder="Usuario* " id="usuario" type="text" name="usuario" :value="old('usuario')" required>
										</div>
									</div>
									<div class="col">
										<div class="mb-4">
											@error('password')
											<br>
											<label class="text-danger">{{$message}}</label>
											@enderror
											<input class="form-control" placeholder="Contraseña*" id="password" type="password" name="password" required autocomplete="new-password">
										</div>
									</div>
									<div class="col mb-4 text-center">
										<div class="form-check d-inline-flex">
											<input class="form-check-input" id="status" type="radio" name="estatus" :value="old('estatus')" autofocus>
											<label class="form-check-label" for="exampleRadios1">
												Activo
											</label>
										</div>
										<div class="form-check d-inline-flex">
											<input class="form-check-input" type="radio" id="estatus2" name="estatus" :value="old(estatus)">
											<label class="form-check-label" for="exampleRadios2">
												Inactivo
											</label>
										</div>
									</div>
									<div class="col">
										<div class="mb-4">
											<input class="form-control" placeholder="Confirmar Contraseña*" id="password_confirmation" type="password" name="password_confirmation" required autocomplete="new-password">
										</div>
									</div>
								</div>
							</div>
							<div class="container d-grid">
								<input class="btn btn-primary btn-claro float-end mx-5 my-3 mb-3 fw-bold" value="Registrar" type="submit" name="submit">
							</div>
						</form>
					</div>
				</div>
			</div>
		</main>
		<!-- Bootstrap 5 Js -->
		<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4" crossorigin="anonymous"></script>
	</body>
</html>