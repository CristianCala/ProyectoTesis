<button class="bg-yellow-200 editBtn">Edicion</button>  


<div class="modal fade" id="userEdit" tabindex="-1" role="dialog" aria-labelledby="exampleModalLongTitle" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLongTitle">Editar Usuario</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <form id="editFrmID">
      <input type="hidden" name="id" id="id">
        @csrf
        @method('PUT')
        <div class="modal-body">
        <div class="form-group">
        @error('nombre')
    <br>
    <small>{{$message}}</small>
    <br>
    @enderror
                    <label for="nombre" value="{{ __('nombre') }}">Nombre</label>
                    <input id="nombre" class="block mt-1 w-full" type="text" name="nombre" :value="old('nombre')" required autofocus autocomplete="name">
        </div>
<div class="form-group">
@error('apellido')
    <br>
    <small>{{$message}}</small>
    <br>
    @enderror
                    <label for="apellido" value="{{ __('apellido') }}">Apellido</label>
                    <input id="apellido" class="block mt-1 w-full" type="text" name="apellido" :value="old('apellido')" required autofocus autocomplete="apellido">
</div>

<div class="form-group">
@error('cedula')
    <br>
    <small>{{$message}}</small>
    <br>
    @enderror
                    <label for="cedula" value="{{ __('cedula') }}">Cedula</label>
                    <input id="cedula" class="block mt-1 w-full" type="text" name="cedula" :value="old('cedula')" required />
</div>

        <div class="form-group">
        @error('email')
    <br>
    <small>{{$message}}</small>
    <br>
    @enderror
                    <label for="email" value="{{ __('Email') }}">Email</label>
                    <input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')" required />

</div>

<div class="form-group">
@error('usuario')
    <br>
    <small>{{$message}}</small>
    <br>
    @enderror
                    <label for="usuario" value="{{ __('usuario') }}">Usuario</label>
                    <input id="usuario" class="block mt-1 w-full" type="text" name="usuario" :value="old('usuario')" required />
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