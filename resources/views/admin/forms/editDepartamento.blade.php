

<button class="bg-yellow-200 editBtn">Edicion</button>   


<div class="modal fade" id="editEquipo" tabindex="-1" role="dialog" aria-labelledby="exampleModalLongTitle" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLongTitle">Editar Usuario</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <form id="editFormID">
        @csrf
                                    <div class="form-row">
                        <div class="form-group col-md-6">
                          <label>Departamento</label>
                       <input type="text" class="form-control" placeholder="E-Salida" aria-label="dep_nombre" aria-describedby="basic-addon1" required name="dep_nombre" value="{{$key->dep_nombre}}">
          <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button type="submit" class="btn btn-primary">Save changes</button>
      </div>
      </form>
    </div>
  </div>
</div>

