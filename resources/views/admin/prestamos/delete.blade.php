<button class="btn btn-danger btn-claro-danger fw-bold" data-bs-toggle="modal" data-bs-target="#deletePrestamo">Eliminar</button>
<!-- Modal borrar Préstamo-->
<div class="modal fade" id="deletePrestamo" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
	<div class="modal-dialog modal-dialog-centered">
		<div class="modal-content border-rad">
			<div class="modal-header">
				<h5 class="modal-title fw-bold" id="staticBackdropLabel">ELIMINAR PRÉSTAMO</h5>
				<button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
			</div>
			<form id="prestamoDeleteID">
				<div class="modal-body p-4 text-center" >
					@csrf
					@method('DELETE')
					<h4>Está seguro que desea eliminar este Equipo?</h4>
					<input type="hidden" name="id" id="delete_id">
				</div>
				<div class="row row-quit-bs mx-4 mb-4">
					<div class="col-4">
						<button type="button" class="btn btn-outline-danger w-100 modal-button-rigth fw-bold" data-bs-dismiss="modal" aria-label="Close">Cerrar</button>
					</div>
					<div class="col-8">
						<button type="submit" class="btn btn-danger w-100 modal-button-left ms-2 fw-bold"><span class="fas fa-trash mx-2"></span>Eliminar</button>
					</div>
				</div>
			</form>
		</div>
	</div>
</div>