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
        @method('PUT')
            <input type="hidden" name="id" id="id">
        <div class="modal-body">
          <div class="form-group">
          <label>Modelo</label>
          <input class="form-control" type="text" name="eq_modelo" placeholder="Modelo" id="eq_modelo">
        </div>
          <div class="form-group">
          <label>Marca</label>
          <input class="form-control" type="text" name="eq_marca" placeholder="Marca" id="eq_marca">
        </div>
        <div class="form-group">
        <label>Serial</label>
          <input class="form-control" type="text" name="eq_serial" placeholder="Serial" id="eq_serial">
        </div>
        <div class="form-group">
        <label>N° Bien Nacional</label>
          <input class="form-control" type="text" name="eq_nbiennacional" placeholder="N° Bien Nacional" id="eq_nbiennacional">
        </div>
        <div class="form-group">
        <label>Estatus</label>
        <input  class="form-control" required type="text" name="eq_estatus" placeholder="N° Estado" id="eq_estatus">
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