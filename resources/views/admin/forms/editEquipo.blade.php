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
        <label for="text" value="{{ __('modelos_mdl_id') }}">Modelo</label>
      <select class="form-control" name="modelos_mdl_id" id="modelos_mdl_id">
                            <option value="">Seleccione Departamento</option>
                            @foreach($departamentos as $key => $value)
                                <option value="{{$key}}">{{$value}}</option>
                            @endforeach
                        </select>
                        </div>

    <div class="form-group">
        <label for="text" value="{{ __('marcas_mar_id') }}">Marca</label>
      <select class="form-control" name="marcas_mar_id" id="marcas_mar_id">
                            <option value="">Seleccione Departamento</option>
                            @foreach($departamentos as $key => $value)
                                <option value="{{$key}}">{{$value}}</option>
                            @endforeach
                        </select>
                        </div>
        <div class="form-group">
            <label for="role">tipo de equipos</label>
                       <select class="form-control form-select" name="eq_tequid" id="eq_tequid">
                            @foreach($tipoEquipo as $key => $value)
                                <option value="{{$key}}">{{$value}}</option>
                            @endforeach
                        </select>
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
           <label>Departamentos</label>
           <select class="form-control" name="departamentos_dep_id" id="departamentos_dep_id">
                            @foreach($departamentos as $key => $value)
                                <option value="{{$key}}">{{$value}}</option>
                            @endforeach
                        </select>
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