

<!-- Button trigger modal -->
<button type="button" class="mb-4 bg-blue-400 rounded-md" data-toggle="modal" data-target="#exampleModalLong">
Informacion
</button>

<!-- Modal -->
<div class="modal fade" id="exampleModalLong" tabindex="-1" role="dialog" aria-labelledby="exampleModalLongTitle" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLongTitle">Modal title</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
      <p>Nombre: {{$key->nombre}}</p>
         <p>Apellido: {{$key->apellido}}</p>
         <p>Cedula: {{$key->cedula}}</p>
         <p>Correo: {{$key->email}}</p>
         <p>Usuario: {{$key->usuario}}</p>
         <p>Estado: {{$key->estatus}}</p>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
      </div>
    </div>
  </div>
</div>