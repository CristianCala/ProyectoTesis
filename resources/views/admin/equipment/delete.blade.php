<button class="btn btn-danger btn-claro-danger fw-bold" data-bs-toggle="modal" data-bs-target="#deleteModal">Eliminar</button>
<!-- Modal -->
<div class="modal fade" id="deleteModal" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
	<div class="modal-dialog modal-dialog-centered">
		<div class="modal-content border-rad">
			<div class="modal-header ">
				<h5 class="modal-title" id="staticBackdropLabel fw-bold">ELIMINAR EQUIPO</h5>
				<button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
			</div>
			<div class="modal-body p-4 text-center">
				<form id="deleteFormID">
					<h5 class="fw-normal">¿Seguro que desea eliminar este equipo?</h5>
					@csrf
					@method('DELETE')
					<input type="hidden" name="id" id="delete_id">
				</div>
				<div class="row row-quit-bs m-3">
					<div class="col-4">
						<button type="button" class="btn btn-outline-danger w-100 modal-button-rigth fw-bold"data-bs-dismiss="modal" aria-label="Close">Cerrar</button>
					</div>
					<div class="col-8">
						<button type="submit" class="btn btn-danger  w-100 modal-button-left ms-2 fw-bold"><li class="fas fa-trash mx-2"></li>Eliminar</button>
					</div>
				</div>
			</form>
		</div>
	</div>