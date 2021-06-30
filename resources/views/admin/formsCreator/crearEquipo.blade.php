<!-- Button trigger modal -->
<button type="button" class="btn btn-primary" data-toggle="modal" data-target="#equipoModal">
 Registrar equipos
</button>
<!-- add Modal -->
<div class="modal fade" id="equipoModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLongTitle" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLongTitle">Modal title</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <form id="addForm">
        @csrf
    <div class="modal-body">

            <div class="form-group">
        <label for="text" value="{{ __('marcas_mar_id') }}">Marca</label>
      <select class="form-control" name="marcas_mar_id" id="marcas_mar_id">
                            <option value="">Seleccione Marca</option>

                                <option value=""></option>

                        </select>
                        </div>

   <div class="form-group">
        <label for="text" value="{{ __('modelos_mdl_id') }}">Modelo</label>
      <select class="form-control" name="modelos_mdl_id" id="modelos_mdl_id">
         <option value="">Seleccione modelo</option>
                  
                                <option value=""></option>

                </select>
               </div>

        <div class="form-group">
        @error('eq_serial')
    <br>
    <small>{{$message}}</small>
    <br>
    @enderror
                        <label for="email" value="{{ __('eq_serial') }}">Serial</label>
                        <input id="eq_serial" class="form-control" type="text" name="eq_serial" :value="old('eq_serial')"  autofocus>

      </div>

          <div class="form-group">
            <label for="role">tipo de equipos</label>
                       <select class="form-control form-select" name="eq_tequid" id="eq_tequid">
                        <option value="">Seleccione Tipo de equipo</option>
                          
                                <option value=""></option>

                        </select>
        </div>

    <div class="form-group">
        <label for="text" value="{{ __('departamentos_dep_id') }}">Departamento</label>
      <select class="form-control" name="departamentos_dep_id" id="departamentos_dep_id">
                            <option value="">Seleccione Departamento</option>
                   
                                <option value=""></option>
           
                        </select>
                        </div>

        <div class="form-group">
        @error('eq_nbiennacional')
    <br>
    <small>{{$message}}</small>
    <br>
    @enderror
                        <label for="email" value="{{ __('eq_nbiennacional') }}">Bien nacional</label>
                        <input type="text"id="eq_nbiennacional" class="form-control" name="eq_nbiennacional" :value="old('eq_nbiennacional')"  autofocus>            </div>
    
    
 </div>
     <div class="mt-8 flex flex-col">
                      <center>
                      <label for="text" value="{{ __('eq_estatus') }}">Estado</label>
                      <fieldset>
                        <input id="eq_estatus" type="checkbox" name="eq_estatus" :value="old('eq_estatus')"  autofocus />Activo
                        <input id="eq_estatus" type="checkbox" name="eq_estatus" :value="old('eq_estatus')"  autofocus />Inactivo
                        </fieldset>
                        </center>
                        </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button type="submit" class="btn btn-primary">Save changes</button>
        </div>
   </form>
    </div>
  </div>
</div>