<button class="rounded-md bg-red-400 deleteBtn">Eliminacion</button>

<!-- delete Modal -->
<div class="modal fade" id="prestamoDelete" tabindex="-1" role="dialog" aria-labelledby="exampleModalLongTitle" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLongTitle">deletion title</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
       <form id="prestamoDeleteID">
       	 <div class="modal-body">
  	@csrf
  	@method('DELETE')

  	<input type="hidden" name="id" id="delete_id">
  	   <p>Seguro que desea eliminar a este equipo?</p>
        	
      </div>

      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button type="submit" class="btn btn-primary">Save changes</button>
         </div>
   </form>
    </div>
  </div>
</div>