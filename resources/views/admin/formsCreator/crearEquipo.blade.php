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
         <select class="form-control form-select " name="eq_tequid" >
                            <option value="">Seleccione Equipo</option>
                            @foreach($tipoEquipo as $key => $value)
                                <option value="{{$key}}">{{$value}}</option>
                            @endforeach
                        </select>
      </div>
        <div class="form-group">
        @error('eq_modelo')
    <br>
    <small>{{$message}}</small>
    <br>
    @enderror
      <label for="text" value="{{ __('eq_modelo') }}">Modelo</label>
         <input id="eq_modelo" class="form-control" type="text" name="eq_modelo" :value="old('eq_modelo')"  autofocus>
        </div>
        <div class="form-group">
        @error('eq_marca')
    <br>
    <small>{{$message}}</small>
    <br>
    @enderror

      <label for="text" value="{{ __('eq_marca') }}">Marca</label>
       <input type="text"id="eq_marca" class="form-control"name="eq_marca" :value="old('eq_marca')"  autofocus>
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