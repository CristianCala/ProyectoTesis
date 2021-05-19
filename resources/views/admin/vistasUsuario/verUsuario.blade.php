<button type="button" class="mb-4 bg-blue-400 rounded-md" data-toggle="modal" data-target="#verUser{{$key->id}}">
  Informacion
</button>

<!-- Modal -->
<div class="modal fade bg-black bg-opacity-50 inset-0 absolute flex justify-center items-center" id="verUser{{$key->id}}" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Data de Usuario</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
           <p>Nombre: {{$key->name}}</p>
         <p>Correo: {{$key->email}}</p>
          </div>
      </div>
    </div>
