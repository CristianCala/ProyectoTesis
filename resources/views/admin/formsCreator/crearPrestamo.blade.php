
<!-- Button trigger modal -->
<button type="button" class="btn btn-primary" data-toggle="modal" data-target="#prestamoModal">
 Registrar prestamos
</button>
<!-- add Modal -->
<div class="modal fade" id="prestamoModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLongTitle" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLongTitle">Modal title</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <form id="prestamoFrm">
        @csrf
    <div class="modal-body">
        <div class="form-group">
        @error('pres_salida')
    <br>
    <small>{{$message}}</small>
    <br>
    @enderror
      <label for="text" value="{{ __('pres_salida') }}">Codigo de salida</label>
         <input id="pres_salida" class="block mt-1 w-full" type="text" name="pres_salida" :value="old('pres_salida')"  autofocus>   
        </div>
        <div class="form-group">
        @error('pres_fecha_salida')
    <br>
    <small>{{$message}}</small>
    <br>
    @enderror
      <label for="pres_fecha_entrada" value="{{ __('pres_fecha_salida') }}">Fecha de Salida</label>
       <input type="date" id="pres_fecha_salida" class="block mt-1 w-full" name="pres_fecha_salida" :value="old('pres_fecha_salida')"  autofocus>
        </div>
        <div class="form-group">
        <label for="text" value="{{ __('usuarios_us_id') }}">Usuario a prestar</label>
           <select class="form-control form-select " name="usuarios_us_id" >
                            <option value="">Seleccione usuario</option>
                            @foreach($users as $key)
                                <option value="{{$key->id}}">{{$key->user}}</option>
                            @endforeach
                        </select>
        </div>
        <div class="form-group">
        <label for="text" value="{{ __('equipos_eq_id') }}">Equipo a prestar</label>
                             <select class="form-control form-select " name="equipos_eq_id" >
                            <option value="">Seleccione Equipo</option>
                            @foreach($id as $key => $value)
                                <option value="{{$value}}">{{$value}}</option>
                            @endforeach
                        </select>
        </div>
        <div class="form-group">
        @error('pres_fecha_entrada')
    <br>
    <small>{{$message}}</small>
    <br>
    @enderror
        <label for="pres_fecha_entrada" value="{{ __('pres_fecha_entrada') }}">Fecha de entrada</label>
        <input id="pres_fecha_entrada" class="block mt-1 w-full" type="date" name="pres_fecha_entrada" :value="old('pres_fecha_entrada')"  autofocus>
     </div>

     </div>

     <div class="mt-8 flex flex-col">
                      <center>
                      <label for="text" value="{{ __('pres_estatus') }}">Estado</label>
                      <fieldset>
                        <input id="pres_estatus" type="checkbox" name="pres_estatus" :value="old('pres_estatus')"  autofocus />Activo
                        <input id="pres_estatus" type="checkbox" name="pres_estatus" :value="old('pres_estatus')"  autofocus />Inactivo
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