<!-- Button trigger modal -->
<button type="button" class="inline-block font-normal text-center px-3 py-2 leading-normal text-base rounded cursor-pointer text-white bg-blue-600" data-toggle="modal" data-target="#exampleModalTwo">
Registrar equipo
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
<form action="{{url('/admin/equipment')}}" method="post" id="equipoFrm">
    @csrf
    <div class="mt-4 text-center">Registro de equipos</div>

    <div class="mt-8 flex flex-col">
    @error('eq_modelo')
    <br>
    <small>{{$message}}</small>
    <br>
    @enderror
      <label for="text" value="{{ __('eq_modelo') }}">Modelo</label>
         <input id="eq_modelo" class="block mt-1 w-full" type="text" name="eq_modelo" :value="old('eq_modelo')"  autofocus>
    </div>
       @error('eq_marca')
    <br>
    <small>{{$message}}</small>
    <br>
    @enderror
     <div class="mt-8 flex flex-col">
      <label for="text" value="{{ __('eq_marca') }}">Marca</label>
       <input type="text"id="eq_marca" class="block mt-1 w-full" name="eq_marca" :value="old('eq_marca')"  autofocus>
     </div>
  <!--  @error('eq_tequid')
    <br>
    <small>{{$message}}</small>
    <br>
    @enderror
          <div class="form-row">
                      <label for="role">tipo de equipos</label>
                        <select class="form-control form-select " name="eq_tequid" >
                            <option value="">Seleccione Equipo</option>
                           {{-- @foreach($tipoEquipo as $key => $value)
                                <option value="{{$key}}">{{$value}}</option>
                            @endforeach --}}
                        </select>
                    </div>-->
   @error('eq_serial')
    <br>
    <small>{{$message}}</small>
    <br>
    @enderror
                    <div class="mt-8 flex flex-col">
                        <label for="email" value="{{ __('eq_serial') }}">Serial</label>
                        <input id="eq_serial" class="block mt-1 w-full" type="text" name="eq_serial" :value="old('eq_serial')"  autofocus>
                    </div>
   @error('eq_nbiennacional')
    <br>
    <small>{{$message}}</small>
    <br>
    @enderror
                    <div class="mt-8 flex flex-col">
                        <label for="email" value="{{ __('eq_nbiennacional') }}">Bien nacional</label>
                        <input type="text"id="eq_nbiennacional" class="block mt-1 w-full" name="eq_nbiennacional" :value="old('eq_nbiennacional')"  autofocus>
                    </div>
    <!-- @error('departamentos_dep_id')
    <br>
    <small>{{$message}}</small>
    <br>
    @enderror
  <div class="form-row">
                    <label for="role">Departamentos</label>
                        <select class="form-control" name="departamentos_dep_id">
                            <option value="">Seleccione Departamento</option>
                             {{-- @foreach($departamentos as $key => $value)
                                <option value="{{$key}}">{{$value}}</option>
                            @endforeach--}}
                        </select>
                    </div>-->
      @error('eq_estatus')
    <br>
    <small>{{$message}}</small>
    <br>
    @enderror
                    <div class="mt-8 flex flex-col">
                      <center>
                      <label for="text" value="{{ __('eq_estatus') }}">Estado</label>
                      <fieldset>
                        <input id="eq_estatus" type="checkbox" name="eq_estatus" :value="old('eq_estatus')"  autofocus />Activo
                        <input id="eq_estatus" type="checkbox" name="eq_estatus" :value="old('eq_estatus')"  autofocus />Inactivo
                        </fieldset>
                        </center>
                    </div>
        <button>Registrar</button>
    </form>
      </div>
     
    </div>
  </div>
</div>