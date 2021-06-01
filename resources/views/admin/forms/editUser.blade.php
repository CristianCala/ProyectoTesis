<<<<<<< HEAD
<button class="bg-yellow-200 editBtn">Edicion</button>  


<div class="modal fade" id="candidatoEditModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLongTitle" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLongTitle">Editar Usuario</h5>
=======
<button type="button" class="bg-yellow-200" data-toggle="modal" data-target="#editAuditoria{{$key->id}}">
  actualizar
</button>

<!-- Modal -->
<div class="modal fade" id="editAuditoria{{$key->id}}" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Editar Auditoria</h5>
>>>>>>> 070bdc088875dc6afdc42bf8d91d687df636ef80
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
<<<<<<< HEAD
      <form id="editFrmID">
        @csrf
        @method('PUT')
            <input type="hidden" name="id" id="id">
        <div class="modal-body">
          <div class="form-group">
          <label>Nombre</label>
          <input class="form-control" type="text" name="name" placeholder="name" id="name">
        </div>
          <div class="form-group">
          <label>Email</label>
          <input class="form-control" type="text" name="email" placeholder="email" id="email">
        </div>
        </div>
          <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button type="submit" class="btn btn-primary">Save changes</button>
=======
      <div class="modal-body">
      <form class="form-horizontal" method="POST" action="{{Route('users.update',$key->id)}}">
                        {{ csrf_field() }}
                          {{ method_field('PATCH') }}
                                    <div class="form-row">
                        <div class="form-group col-md-6">
                        <input id="name" type="text" class="form-control" name="name" value="{{$key->name}}" required autofocus>
                        </div>
                        <div class="form-group col-md-6">
                        <input id="email" type="email" class="form-control" name="email" value="{{$key->email}}" required>
                        </div>
                      </div>
                            <br>
                        <div class="form-row">
                    </div>    
      </div>
      <div class="modal-footer">
 <div class="form-group">
                            <div class="col-md-6 col-md-offset-4">
                                <button type="submit" class="btn btn-primary">
                                    Register
                                </button>
                            </div>
                        </div>
                    </form>
>>>>>>> 070bdc088875dc6afdc42bf8d91d687df636ef80
      </div>
      </form>
    </div>
  </div>
</div>