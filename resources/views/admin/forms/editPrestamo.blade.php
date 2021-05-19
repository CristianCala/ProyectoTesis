<button type="button" class="bg-yellow-200" data-toggle="modal" data-target="#editUser{{$info->id}}">
  actualizar
</button>

<!-- Modal -->
<div class="modal fade" id="editUser{{$info->id}}" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Editar Usuario</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
            <form class="form-horizontal" method="POST" action="{{Route('prestamos.update',$info->id)}}">
                        {{ csrf_field() }}
                          {{ method_field('PATCH') }}
                                    <div class="form-row">
                        <div class="form-group col-md-6">
                       <input type="text" class="form-control" placeholder="E-Salida" aria-label="pres_salida" aria-describedby="basic-addon1" required name="pres_salida" value="{{$info->pres_salida}}">
                        </div>
                        <div class="form-group col-md-6">
                          <input type="date" class="form-control" placeholder="fecha de salida" aria-label="pres_fecha_salida" aria-describedby="basic-addon2" required name="pres_fecha_salida" value="{{$info->pres_fecha_salida}}">
                        </div>
                      </div>

                                     <div class="form-row">
                        <div class="form-group col-md-6">
                            <input type="date" class="form-control" placeholder="fecha de salida" aria-label="pres_fecha_entrada" aria-describedby="basic-addon2" required name="pres_fecha_entrada" value="{{$info->pres_fecha_entrada}}">
                        </div>
                            <br>
                        <div class="form-row">

                    </div>
                    <br>
                    <br>
                        <div class="form-group col-md-12">
        <input type="text" class="form-control" placeholder="Estatus" aria-label="pres_estatus" aria-describedby="basic-addon4" required  name="pres_estatus"  value="{{$info->pres_estatus}}">
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