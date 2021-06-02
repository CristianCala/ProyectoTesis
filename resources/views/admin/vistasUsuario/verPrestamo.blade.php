
<button type="button" class="bg-blue-400 rounded-md" data-toggle="modal" data-target="#verPrestamo{{$info->id}}">
  Informacion
</button>

<!-- Modal -->
<div class="modal fade" id="verPrestamo{{$info->id}}" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
      <p>Datos del prestamo generado</p>
          <p>Codigo de Prestamo: {{$info->pres_salida}}</p>
            <p>Fecha de Salida: {{$info->pres_fecha_salida}}</p>
            <p>Fecha de Entrada{{$info->pres_fecha_entrada}}</p>
            <p>Estado: {{$info->pres_estatus}}</p>
      </div>
      <div class="modal-footer">
      <a align="center" class="btn btn-primary">Imprimir comprobante</a>
      @include('admin.prestamos.delete',['prestamos'=>$info])
      </div>
    </div>
  </div>
</div>