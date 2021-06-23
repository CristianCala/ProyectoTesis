

<button class="bg-yellow-200 editBtn">Edicion</button>   
<!-- Modal -->
<div class="modal fade" id="editDepartamento" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <form id="editFrmDpto">
      @csrf
        @method('PUT')
        <input type="hidden" name="id" id="id">
      <div class="modal-body">
        <div class="form-group">
          <label for="Departamento">Departamento</label>
          <input type="text" class="form-control" name="dep_nombre" placeholder="Departamento" id="dep_nombre">
        </div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button type="submit" class="btn btn-primary">Save changes</button>
      </div>
      </form>
    </div>
  </div>
</div>