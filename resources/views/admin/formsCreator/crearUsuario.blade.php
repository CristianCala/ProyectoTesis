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
    @error('name')
    <br>
    <small>{{$message}}</small>
    <br>
    @enderror
    <label for="name" value="{{ __('Name') }}">Nombre</label>
        <input id="name" class="form-control" type="text" name="name" :value="old('name')"  autofocus autocomplete="name">
        </div>
</div>
        <div class="form-group">
          @error('email')
    <br>
    <small>{{$message}}</small>
    <br>
    @enderror

     <label for="email" value="{{ __('Email') }}">Email</label>
    <input id="email" class="form-control"type="email" name="email" :value="old('email')"  />

</div>
        <div class="form-group">
         @error('password')
    <br>
    <small>{{$message}}</small>
    <br>
    @enderror

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
    </div>
  </div>
</div>