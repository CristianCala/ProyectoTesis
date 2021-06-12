<button class="bg-yellow-200 editBtn">Edicion</button>   

<div class="modal fade" id="editPrestamo" tabindex="-1" role="dialog" aria-labelledby="exampleModalLongTitle" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLongTitle">Editar Usuario</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <form id="prestamoEdit">
        @csrf
        @method('PUT')
            <input type="hidden" name="id" id="id">
        <div class="modal-body">
          <div class="form-group">
          <label>Salida</label>
          <input type="text" class="form-control" placeholder="E-Salida" aria-label="pres_salida" aria-describedby="basic-addon1" required name="pres_salida" id="pres_salida">
          <div class="form-group">
                       <label for="role">Usuario</label>
                                <select class="form-control form-select " name="usuarios_us_id" >
                            <option value="">Seleccione usuario</option>
                            @foreach($users as $key => $value)
                                <option value="{{$key}}">{{$value}}</option>
                            @endforeach
                        </select>
          </div>
        </div>
          <div class="form-group">
          <label>Fecha de Salida</label>
          <input type="date" class="form-control" placeholder="fecha de salida" aria-label="pres_fecha_salida" aria-describedby="basic-addon2" required name="pres_fecha_salida" id="pres_fecha_salida">
        </div>
        <div class="form-group">
        <label>Fecha de Entrada</label>
        <input type="date" class="form-control" placeholder="fecha de salida" aria-label="pres_fecha_entrada" aria-describedby="basic-addon2" required name="pres_fecha_entrada" id="pres_fecha_entrada">

          <div class="form-group">
                        <label for="role">Departamentos</label>
                        <select class="form-control form-select " name="equipos_eq_id" >
                            <option value="">Seleccione Equipo</option>
                            @foreach($equipo as $key => $value)
                                <option value="{{$key}}">{{$value}}</option>
                            @endforeach
                        </select>
          </div>

        </div>
        <div class="form-group">
        <label>Estado</label>
        <input type="text" class="form-control" placeholder="Estatus" aria-label="pres_estatus" aria-describedby="basic-addon4" required  name="pres_estatus"  id="pres_estatus">
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