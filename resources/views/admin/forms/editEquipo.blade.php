<button type="button" class="bg-yellow-200" data-toggle="modal" data-target="#editUser{{$key->id}}">
  actualizar
</button>

<!-- Modal -->
<div class="modal fade" id="editUser{{$key->id}}" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Editar Usuario</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
            <form class="form-horizontal" method="POST" action="{{Route('equipment.update',$key->id)}}">
                        {{ csrf_field() }}
                          {{ method_field('PATCH') }}
                                    <div class="form-row">
                        <div class="form-group col-md-6">
                          <input name="eq_modelo" placeholder="Modelo" class="form-control" type="text" required value="{{$key->eq_modelo}}">
                        </div>
                        <div class="form-group col-md-6">
                          <input type="text" class="form-control" name="eq_marca" placeholder="Marca" required value="{{$key->eq_marca}}">
                        </div>
                      </div>

                                     <div class="form-row">
                        <div class="form-group col-md-6">
                            <input name="eq_serial" placeholder="Serial" class="form-control" required type="text" value="{{$key->eq_serial}}">
                        </div>
                            <br>
                        <div class="form-row">

                    </div>
                    <br>
                    <br>
                     <div class="form-group col-md-6">
                            <input name="eq_nbiennacional" placeholder="Numero Bien nacional" class="form-control" required type="text" value="{{$key->eq_nbiennacional}}">
                        </div>
                        <div class="form-group col-md-12">
                                  <input name="eq_estatus" placeholder="Estado" class="form-control" required type="text" value="{{$key->eq_estatus}}">
                        </div>
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