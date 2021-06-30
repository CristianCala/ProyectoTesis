<button class="btn btn-success btn-claro-success fw-bold" data-bs-toggle="modal" data-bs-target="#editAuditoria{{$key->id}}">Actualizar</button>
<!-- Modal -->
<div class="modal fade" id="editAuditoria{{$key->id}}" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
	<div class="modal-dialog modal-dialog-centered">
		<div class="modal-content border-rad">
			<div class="modal-header">
				<h5 class="modal-title fw-bold" id="staticBackdropLabel">EDITAR AUDITORIA</h5>
				<button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
			</div>
			<form method="POST" action="{{Route('auditoria.update',$key->id)}}">
				<div class="modal-body p-4 text-center">
					{{ csrf_field() }}
					{{ method_field('PATCH') }}
					<div class="container">
						<div class="row row cols-2">
							<div class="col-6 my-2">
								<input type="text" placeholder="E-Salida" class="form-control" aria-label="au_maquina" aria-describedby="basic-addon1" required name="au_maquina" value="{{$key->au_maquina}}">
							</div>
							<div class="col-6 my-2">
								<input type="text" class="form-control" placeholder="Fecha de salida" aria-label="au_so" aria-describedby="basic-addon2" required name="au_so" value="{{$key->au_so}}">
							</div>
							<div class="col-6 mt-2">
								<input type="text" class="form-control" placeholder="Fecha de salida" aria-label="au_ip" aria-describedby="basic-addon2" required name="au_ip" value="{{$key->au_ip}}">
							</div>
							<div class="col-6 mt-2">
								<input type="text" class="form-control" placeholder="Navegador" aria-label="au_navegador" aria-describedby="basic-addon4" required  name="au_navegador"  value="{{$key->au_navegador}}">
							</div>
							<div class="col-12 my-4">
								<input type="date" class="form-control" aria-label="au_fecha" aria-describedby="basic-addon4" required  name="au_fecha"  value="{{$key->au_fecha}}">
							</div>
						</div>
					</div>
				</div>
				<div class="row row-quit-bs mx-4 mb-4">
					<div class="col-4">
						<button type="button" class="btn btn-outline-success w-100 modal-button-rigth fw-bold" data-bs-dismiss="modal" aria-label="Close">Cerrar</button>
					</div>
					<div class="col-8">
						<button type="submit" class="btn btn-success  w-100 modal-button-left ms-2 fw-bold"><span class="fas fa-redo alt mx-2"></span>Actualizar</button>
					</div>
				</div>
			</form>
		</div>
	</div>
</div>