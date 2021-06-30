<button class="btn btn-success btn-claro-success fw-bold" data-bs-toggle="modal" data-bs-target="#editUsuario">Editar</button>
<!-- Modal Editar Usuario-->
<div class="modal fade" id="editUsuario" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
	<div class="modal-dialog modal-dialog-centered">
		<div class="modal-content border-rad">
			<div class="modal-header">
				<h5 class="modal-title fw-bold" id="staticBackdropLabel">EDITAR USUARIO</h5>
				<button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
			</div>
			<form id="editFrmID">
				<div class="modal-body p-4 text-center" >
					@csrf
					@method('PUT')
					<input type="hidden" name="id" id="id">
					<div class="container">
						<div class="row row cols-2">
							<div class="col-6 my-2">
								@error('nombre')
								<br>
								<small>{{$message}}</small>
								<br>
								@enderror
								<label for="nombre" value="{{ __('nombre') }}"  class="fw-normal">Nombre</label>
								<input id="nombre" class="form-control" placeholder="Nombre..." type="text" name="nombre" :value="old('nombre')" autofocus autocomplete="name" required>
							</div>
							<div class="col-6 my-2">
								@error('apellido')
								<br>
								<small >{{$message}}</small>
								<br>
								@enderror
								<label for="apellido" value="{{ __('apellido') }}" class="fw-normal">Apellido</label>
								<input id="apellido" class="form-control" placeholder="Apellido..." type="text" name="apellido" :value="old('apellido')" autofocus autocomplete="apellido" required>
							</div>
							<div class="col-6 mt-2">
								@error('cedula')
								<br>
								<small>{{$message}}</small>
								<br>
								@enderror
								<label for="cedula" value="{{ __('cedula') }}" class="fw-nomal">Cedula</label>
								<input id="cedula" class="form-control" placeholder="Cédula..." type="number" name="cedula" :value="old('cedula')" required>
							</div>
							<div class="col-6 mt-2">
								@error('email')
								<br>
								<small>{{$message}}</small>
								<br>
								@enderror
								<label class="fw-normal" for="email" value="{{ __('Email') }}">Email</label>
								<input id="email" class="form-control" placeholder="Email..." type="email" name="email" :value="old('email')" required>
							</div>
							<div class="col-12 mt-2 px-5">
								@error('usuario')
								<br>
								<small>{{$message}}</small>
								<br>
								@enderror
								<label class="fw-normal" for="usuario" value="{{ __('usuario') }}">Usuario</label>
								<input id="usuario" class="form-control" placeholder="Usuario..." type="text" name="usuario" :value="old('usuario')" required>
							</div>
							<div class="col-12 mt-2">
								<input class="form-check-input" type="checkbox" id="flexSwitchCheckChecked" name="pres_estatus" checked >
								<label class="form-check-label" for="flexSwitchCheckChecked">Estado</label>
							</div>
						</div>
					</div>
				</div>
				<div class="row row-quit-bs mx-4 mb-4">
					<div class="col-4">
						<button type="button" class="btn btn-outline-success w-100 modal-button-rigth fw-bold" data-bs-dismiss="modal" aria-label="Close">Cerrar</button>
					</div>
					<div class="col-8">
						<button type="submit" class="btn btn-success  w-100 modal-button-left ms-2 fw-bold"><span class="fas fa-save alt mx-2"></span>Guardar Cambios</button>
					</div>
				</div>
			</form>
		</div>
	</div>
</div>