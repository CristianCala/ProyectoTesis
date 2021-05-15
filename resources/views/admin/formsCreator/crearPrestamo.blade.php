<!-- Button trigger modal -->
<button type="button" class="inline-block font-normal text-center px-3 py-2 leading-normal text-base rounded cursor-pointer text-white bg-blue-600" data-toggle="modal" data-target="#exampleModalTwo">
  Launch modal two
</button>

<!-- Modal -->
<div class="modal hidden fixed top-0 left-0 w-full h-full outline-none fade" id="exampleModalTwo" tabindex="-1" role="dialog">
  <div class="modal-dialog relative w-auto pointer-events-none max-w-lg my-8 mx-auto px-4 sm:px-0" role="document">
    <div class="relative flex flex-col w-full pointer-events-auto bg-white border border-gray-300 rounded-lg">
      <div class="flex items-start justify-between p-4 border-b border-gray-300 rounded-t">
        <h5 class="mb-0 text-lg leading-normal">Modal title</h5>
        <button type="button" class="close" data-dismiss="modal">&times;</button>
      </div>
      <div class="relative flex p-4">
       <form action="{{url('/admin/equipment')}}" method="post">
    @csrf
    <div class="mt-4 text-center">Registro de Prestamos</div>

    <div class="mt-8 flex flex-col">
    @error('pres_salida')
    <br>
    <small>{{$message}}</small>
    <br>
    @enderror
      <label for="text" value="{{ __('pres_salida') }}">Modelo</label>
         <input id="pres_salida" class="block mt-1 w-full" type="text" name="pres_salida" :value="old('pres_salida')"  autofocus>
    </div>
       @error('pres_fecha_salida')
    <br>
    <small>{{$message}}</small>
    <br>
    @enderror
     <div class="mt-8 flex flex-col">
      <label for="pres_fecha_entrada" value="{{ __('pres_fecha_salida') }}">Marca</label>
       <input type="date" id="pres_fecha_salida" class="block mt-1 w-full" name="pres_fecha_salida" :value="old('pres_fecha_salida')"  autofocus>
     </div>
   @error('pres_fecha_entrada')
    <br>
    <small>{{$message}}</small>
    <br>
    @enderror
                    <div class="mt-8 flex flex-col">
                        <label for="pres_fecha_entrada" value="{{ __('pres_fecha_entrada') }}">Serial</label>
                        <input id="pres_fecha_entrada" class="block mt-1 w-full" type="date" name="pres_fecha_entrada" :value="old('pres_fecha_entrada')"  autofocus>
                    </div>
      @error('pres_estatus')
    <br>
    <small>{{$message}}</small>
    <br>
    @enderror
                    <div class="mt-8 flex flex-col">
                      <center>
                      <label for="text" value="{{ __('pres_estatus') }}">Estado</label>
                      <fieldset>
                        <input id="pres_estatus" type="checkbox" name="pres_estatus" :value="old('pres_estatus')"  autofocus />Activo
                        <input id="pres_estatus" type="checkbox" name="pres_estatus" :value="old('pres_estatus')"  autofocus />Inactivo
                        </fieldset>
                        </center>
                    </div>
        <button>Registrar</button>
    </form>
      </div>
    </div>
  </div>
</div>