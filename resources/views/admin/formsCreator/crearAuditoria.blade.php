<button class="btn btn-success btn-claro-success fw-bold" data-bs-toggle="modal" data-bs-target="#teamRegister">Registrar Equipo</button>
<!-- Modal crear Auditoria-->
<div class="modal fade" id="teamRegister" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
	<div class="modal-dialog modal-dialog-centered">
		<div class="modal-content border-rad">
			<div class="modal-header">
				<h5 class="modal-title fw-bold" id="staticBackdropLabel">REGISTRO DE EQUIPO</h5>
				<button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
			</div>
			<form action="{{url('/admin/auditoria')}}" method="post">
				<div class="modal-body p-4 text-center" >
					@csrf
					<div class="container">
						<div class="row row cols-2">
							<div class="col-6 my-2">
								@error('au_maquina')
								<br>
								<small>{{$message}}</small>
								<br>
								@enderror
								<label for="text" value="{{ __('au_maquina') }}" class="fw-normal">Máquina</label>
								<input id="au_maquina" class="form-control" type="text" name="au_maquina" :value="old('au_maquina')" placeholder="Máquina..."  autofocus required>
							</div>
							<div class="col-6 my-2">
								@error('au_so')
								<br>
								<small>{{$message}}</small>
								<br>
								@enderror
								<label class="fw-normal" for="text" value="{{ __('au_so') }}">Sistema Operativo</label>
								<input type="text" id="au_so" class="form-control" name="au_so" :value="old('au_so')" placeholder="S.O."  autofocus required>
							</div>
							<div class="col-6 mt-2">
								@error('au_ip')
								<br>
								<small>{{$message}}</small>
								<br>
								@enderror
								<label class="fw-normal" for="email" value="{{ __('au_ip') }}">Dirección IP</label>
								<input id="au_ip" class="form-control" type="number" name="au_ip" :value="old('au_ip')"  placeholder="IP..." autofocus required>
							</div>
							<div class="col-6 mt-2">
								@error('au_navegador')
								<br>
								<small>{{$message}}</small>
								<br>
								@enderror
								<label class="fw-normal" for="email" value="{{ __('au_navegador') }}">Navegador</label>
								<input type="text" id="au_navegador" class="form-control" name="au_navegador" :value="old('au_navegador')" placeholder="Navegador..."  autofocus required>
							</div>
							<div class="col-12 mt-2 px-5">
								@error('au_fecha')
								<br>
								<small>{{$message}}</small>
								<br>
								@enderror
								<label class="fw-normal" for="email" value="{{ __('au_fecha') }}">Fecha</label>
								<input type="date" id="au_fecha" class="form-control" name="au_fecha" :value="old('au_fecha')"  autofocus required>
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