<button class="bg-yellow-200 editBtn">Edicion</button>  


<div class="modal fade" id="userEdit" tabindex="-1" role="dialog" aria-labelledby="exampleModalLongTitle" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLongTitle">Editar Usuario</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <form id="editFrmID">
      <input type="hidden" name="id" id="id">
        @csrf
        @method('PUT')
        <div class="modal-body">
          <div class="form-group">
          <label>Nombre</label>
          <input class="form-control" type="text" name="name" placeholder="name" id="name">
        </div>
          <div class="form-group">
          <label>Email</label>
          <input class="form-control" type="text" name="email" placeholder="email" id="email">
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