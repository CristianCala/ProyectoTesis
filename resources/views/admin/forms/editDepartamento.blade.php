

<button class="bg-yellow-200 editBtn">Edicion</button>   
<<<<<<< HEAD
<!-- Modal -->
<div class="modal fade" id="editDepartamento" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
=======


<div class="modal fade" id="editEquipo" tabindex="-1" role="dialog" aria-labelledby="exampleModalLongTitle" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLongTitle">Editar Usuario</h5>
>>>>>>> 22841bdefc4b8d2ad3b4b01820854cb895bb4df3
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
<<<<<<< HEAD
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
=======
      <form id="editFormID">
        @csrf
                                    <div class="form-row">
                        <div class="form-group col-md-6">
                          <label>Departamento</label>
                       <input type="text" class="form-control" placeholder="E-Salida" aria-label="dep_nombre" aria-describedby="basic-addon1" required name="dep_nombre" value="{{$key->dep_nombre}}">
          <div class="modal-footer">
>>>>>>> 22841bdefc4b8d2ad3b4b01820854cb895bb4df3
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button type="submit" class="btn btn-primary">Save changes</button>
      </div>
      </form>
    </div>
  </div>
<<<<<<< HEAD
</div>
=======
</div>

>>>>>>> 22841bdefc4b8d2ad3b4b01820854cb895bb4df3
