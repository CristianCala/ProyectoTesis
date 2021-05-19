<button type="button" class="bg-yellow-200" data-toggle="modal" data-target="#editAuditoria{{$key->id}}">
  actualizar
</button>

<!-- Modal -->
<div class="modal fade" id="editAuditoria{{$key->id}}" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Editar Auditoria</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
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

                         <div class="form-row">
                        <div class="form-group col-md-6">
                        <input id="password" type="password" class="form-control" name="password" value="{{$key->password}}"required>
                        </div>
                            <br>
                        <div class="form-row">

                    </div>
                    <br>
                    <br>
                        <div class="form-group col-md-12">
                        <input id="password-confirm" type="password" class="form-control" name="password_confirmation" value="{{$key->password}}" required>
                        </div>
                      <br>
                    <br>
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
      </div>
    </div>
  </div>
</div>