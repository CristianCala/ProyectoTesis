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
      <form method="POST" action="{{url('/admin/users')}}">
        @csrf
    <div class="mt-4 text-center">Registro de Usuarios</div>

    <div class="mt-8 flex flex-col">
    @error('name')
    <br>
    <small>{{$message}}</small>
    <br>
    @enderror
      <label for="text" value="{{ __('name') }}">Modelo</label>
         <input id="name" class="block mt-1 w-full" type="text" name="name" :value="old('name')"  autofocus>
    </div>
       @error('email')
    <br>
    <small>{{$message}}</small>
    <br>
    @enderror
     <div class="mt-8 flex flex-col">
     <label for="email" value="{{ __('Email') }}">Email</label>
    <input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')" required />
        </div>
   @error('password')
    <br>
    <small>{{$message}}</small>
    <br>
    @enderror
                    <div class="mt-8 flex flex-col">
                    <label for="password" value="{{ __('Password') }}">Confirm Password</label>
                    <input  id="password" class="block mt-1 w-full" type="password" name="password" required autocomplete="new-password" />
                    </div>
      @error('password_confirmation')
    <br>
    <small>{{$message}}</small>
    <br>
    @enderror
                    <div class="mt-8 flex flex-col">
                    <label for="password_confirmation" value="{{ __('Confirm Password') }}">Confirm Password</label>
                    <input id="password_confirmation" class="block mt-1 w-full" type="password" name="password_confirmation" required autocomplete="new-password" />
                    </div>
        <button>Registrar</button>
    </form>
      </div>
    </div>
  </div>
</div>