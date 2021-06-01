<!-- Button trigger modal -->
<<<<<<< HEAD
<button type="button" class="btn btn-primary" data-toggle="modal" data-target="#candidatoDataModal">
  Launch demo modal
</button>

<!-- add Modal -->
<div class="modal fade" id="candidatoDataModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLongTitle" aria-hidden="true">
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
=======
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
      <form method="POST" action="{{url('/admin/users')}}">
        @csrf
    <div class="mt-4 text-center">Registro de Usuarios</div>

    <div class="mt-8 flex flex-col">
>>>>>>> 070bdc088875dc6afdc42bf8d91d687df636ef80
    @error('name')
    <br>
    <small>{{$message}}</small>
    <br>
    @enderror
    <label for="name" value="{{ __('Name') }}">Nombre</label>
<<<<<<< HEAD
        <input id="name" class="form-control" type="text" name="name" :value="old('name')"  autofocus autocomplete="name">
        </div>
</div>
        <div class="form-group">
          @error('email')
=======
                    <input id="name" class="block mt-1 w-full" type="text" name="name" :value="old('name')"  autofocus autocomplete="name">
    </div>
       @error('email')
>>>>>>> 070bdc088875dc6afdc42bf8d91d687df636ef80
    <br>
    <small>{{$message}}</small>
    <br>
    @enderror
<<<<<<< HEAD

     <label for="email" value="{{ __('Email') }}">Email</label>
    <input id="email" class="form-control"type="email" name="email" :value="old('email')"  />

</div>
        <div class="form-group">
         @error('password')
=======
     <div class="mt-8 flex flex-col">
     <label for="email" value="{{ __('Email') }}">Email</label>
    <input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')"  />
        </div>
   @error('password')
>>>>>>> 070bdc088875dc6afdc42bf8d91d687df636ef80
    <br>
    <small>{{$message}}</small>
    <br>
    @enderror
<<<<<<< HEAD

    <label for="password" value="{{ __('Password') }}">Password</label>
    <input  id="password" class="form-control"type="password" name="password"  autocomplete="new-password" />
      </div>
        <div class="form-group">
     @error('password_confirmation')
        <br>
        <small>{{$message}}</small>
        <br>
        @enderror
        <label for="password_confirmation" value="{{ __('Confirm Password') }}">Confirm Password</label>
          <input id="password_confirmation" class="form-control"type="password" name="password_confirmation"  autocomplete="new-password" />
            </div>


      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button type="submit" class="btn btn-primary">Save changes</button>
        </div>
   </form>
=======
                    <div class="mt-8 flex flex-col">
                    <label for="password" value="{{ __('Password') }}">Password</label>
                    <input  id="password" class="block mt-1 w-full" type="password" name="password"  autocomplete="new-password" />
                    </div>
      @error('password_confirmation')
    <br>
    <small>{{$message}}</small>
    <br>
    @enderror
                    <div class="mt-8 flex flex-col">
                    <label for="password_confirmation" value="{{ __('Confirm Password') }}">Confirm Password</label>
                    <input id="password_confirmation" class="block mt-1 w-full" type="password" name="password_confirmation"  autocomplete="new-password" />
                    </div>
        <button>Registrar</button>
    </form>
      </div>
>>>>>>> 070bdc088875dc6afdc42bf8d91d687df636ef80
    </div>
  </div>
</div>