
<button class="btn btn-success btn-claro-success fw-bold modal-button-left" data-bs-toggle="modal" data-bs-target="#equipoRegister" >
<i class="fas fa-plus mx-2"></i>
<label class="texto-button">Registrar</label>
</button>
<!-- Modal crear Equipo-->
<div class="modal fade" id="equipoRegister" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
	<div class="modal-dialog modal-dialog-centered">
		<div class="modal-content border-rad">
			<div class="modal-header">
				<h5 class="modal-title fw-bold" id="staticBackdropLabel">REGISTRO DE EQUIPO</h5>
				<button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
			</div>
			<form id="addForm" method="post">
				<div class="modal-body p-4 text-center" >
					@csrf
					<div class="container">
						<div class="row row cols-2">
							
							<div class="col-6 my-2">
								<label class="fw-normal" for="marca" value="{{ __('eq_marca') }}">Marca</label>
								@error('eq_marca')
								<br>
								<small>{{$message}}</small>
								<br>
								@enderror
      					<label for="text" value="{{ __('eq_marca') }}">Marca</label>
         				<input id="eq_marca" class="form-control" type="text" name="eq_marca" :value="old('eq_modelo')"  autofocus>
     
							</div>
							<div class="col-6 my-2">
							@error('eq_modelo')
								<br>
								<small>{{$message}}</small>
								<br>
								@enderror
								<label class="fw-normal" for="modelo" value="{{ __('eq_modelo') }}">Modelo</label>
						        <input id="eq_modelo" class="form-control" type="text" name="eq_modelo" :value="old('eq_modelo')"  autofocus>
							
						</div>
						<div class="col-6 mt-2">
							<label class="fw-normal" for="text" value="{{ __('eq_tequid') }}">Tipo de Equipo</label>
							<select class="form-select" name="eq_tequid"  id="eq_tequid">
								<option value="">Seleccione Equipo
								</option>
								@foreach($tipoEquipo as $key => $value)
								<option value="{{$key}}">{{$value}}
								</option>
								@endforeach
							</select>
						</div>
						<div class="col-6 mt-2">
							@error('eq_serial')
							<br>
							<small>{{$message}}</small>
							<br>
							@enderror
							<label class="fw-normal" for="email" value="{{ __('eq_serial') }}">Numero</label>
							<input type="text" id="eq_serial" class="form-control" name="eq_serial" :value="old('eq_serial')"  autofocus required>
						</div>
						<div class="col-6 mt-2">
							@error('eq_nbiennacional')
							<br>
							<small>{{$message}}</small>
							<br>
							@enderror
							<label class="fw-normal" for="email" value="{{ __('eq_nbiennacional') }}">Bien Nacional</label>
							<input type="text"id="eq_nbiennacional" class="form-control" name="eq_nbiennacional" :value="old('eq_nbiennacional')"  autofocus required>
						</div>
						<div class="col-6 mt-2">
							<label class="fw-normal" for="text" value="{{ __('departamentos_dep_id') }}">Departamento</label>
							<select class="form-select" name="departamentos_dep_id" id="departamentos_dep_id">
								<option value="">Seleccione Departamento
								</option>
								@foreach($departamentos as $key => $value)
								<option value="{{$key}}">{{$value}}
								</option>
								@endforeach
							</select>
						</div>
						<div class="col-6 mt-2">
							<label class="fw-normal" for="text" value="{{ __('eq_estatus') }}">Estado</label>
							<fieldset>
								<input class="form-check-input" id="estatusModalUserCreate" type="checkbox" name="eq_estatus" :value="old('eq_estatus')"  autofocus />Activo
								<input class="form-check-input" id="estatusModalUserCreate" type="checkbox" name="eq_estatus" :value="old('eq_estatus')"  autofocus />Inactivo
							</fieldset>
						</div>
					</div>
				</div>
			</div>
			<div class="row row-quit-bs mx-4 mb-4">
				<div class="col-4">
					<button type="button" class="btn btn-outline-success w-100 modal-button-rigth fw-bold" data-bs-dismiss="modal" aria-label="Close">Cerrar</button>
				</div>
				<div class="col-8">
					<button type="submit" class="btn btn-success  w-100 modal-button-left ms-2 fw-bold"><span class="fas fa-save alt mx-2"></span>Registrar</button>
				</div>
			</div>
		</form>
	</div>
</div>
</div>