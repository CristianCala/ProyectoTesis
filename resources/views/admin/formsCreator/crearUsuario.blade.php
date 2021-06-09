<!-- Button trigger modal -->
<button type="button" class="btn btn-primary" data-toggle="modal" data-target="#userModal">
Registrar Usuario
</button>

<!-- add Modal -->
<div class="modal fade" id="userModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLongTitle" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLongTitle">Modal title</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
  <form id="addFrm">
        @csrf
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
        @error('password')
    <br>
    <small>{{$message}}</small>
    <br>
    @enderror
                    <label for="password" value="{{ __('Password') }}">Confirm Password</label>
                    <input  id="password" class="block mt-1 w-full" type="password" name="password" required autocomplete="new-password" />
      </div>

        <div class="form-group">
     @error('password_confirmation')
        <br>
        <small>{{$message}}</small>
        <br>
        @enderror
            <label for="password_confirmation" value="{{ __('Confirm Password') }}">Confirm Password</label>
                    <input id="password_confirmation" class="block mt-1 w-full" type="password" name="password_confirmation" required autocomplete="new-password" />
            </div>
            <div class="mt-8 flex flex-col">
                      <center>
                      <label for="text" value="{{ __('estatus') }}">Estado</label>
                      <fieldset>
                        <input id="estatus" type="checkbox" name="estatus" :value="old('estatus')"  autofocus />Activo
                        <input id="estatus" type="checkbox" name="estatus" :value="old('estatus')"  autofocus />Inactivo
                        </fieldset>
                        </center>
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