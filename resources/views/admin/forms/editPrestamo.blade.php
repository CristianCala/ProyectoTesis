<button class="btn btn-success btn-claro-success fw-bold" data-bs-toggle="modal" data-bs-target="#editUsuario">Editar</button>
<!-- Modal Editar Usuario-->
<div class="modal fade" id="editUsuario" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
	<div class="modal-dialog modal-dialog-centered">
		<div class="modal-content border-rad">
			<div class="modal-header">
				<h5 class="modal-title fw-bold" id="staticBackdropLabel">EDITAR USUARIO</h5>
				<button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
			</div>
			<form id="prestamoEdit">
				<div class="modal-body p-4 text-center" >
					@csrf
					@method('PUT')
					<input type="hidden" name="id" id="id">
					<div class="container">
						<div class="row row cols-2">
							<div class="col-6 my-2">
								<label  class="fw-normal">Salida</label>
								<input type="text" class="form-control" placeholder="Salida" aria-label="pres_salida" aria-describedby="basic-addon1" name="pres_salida" id="pres_salida" required>
							</div>
							<div class="col-6 my-2">
								<label  class="fw-normal">Usuario</label>
								<select class="form-select" name="usuarios_us_id" id="usuarios_us_id" required>
									<option value="" >
										Seleccione Usuario
									</option>
									@foreach($users as $key => $value)
									<option value="{{$key}}">
										{{$value}}
									</option>
									@endforeach
								</select>
							</div>
							<div class="col-6 mt-2">
								<label class="fw-normal">Fecha de Salida</label>
								<input type="date" class="form-control" aria-label="pres_fecha_salida" aria-describedby="basic-addon2"  name="pres_fecha_salida" id="pres_fecha_salida" required>
							</div>
							<div class="col-6 mt-2">
								<label class="fw-normal">Fecha de Entrada</label>
								<input type="date" class="form-control" aria-label="pres_fecha_entrada" aria-describedby="basic-addon2" name="pres_fecha_entrada" id="pres_fecha_entrada" required>
							</div>
							<div class="col-6 mt-2">
								<label class="fw-normal">Equipo a Prestar</label>
								<select class="form-select" name="equipos_eq_id" id="equipos_eq_id" required>
									<option value="">
										Seleccione Equipo
									</option>
									@foreach($id as $key => $value)
									<option value="{{$value}}">
										{{$value}}
									</option>
									@endforeach
								</select>
							</div>
							<div class="col-6 mt-2">
								<label class="fw-normal">Estado</label>
								<input type="text" class="form-control" placeholder="Estado" aria-label="pres_estatus" aria-describedby="basic-addon4" name="pres_estatus"  id="pres_estatus" required>
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