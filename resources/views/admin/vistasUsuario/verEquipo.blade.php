
<button type="button" class="bg-blue-400 rounded-md" data-toggle="modal" data-target="#verPrestamo{{$key->id}}">
  Informacion
</button>

<!-- Modal -->
<div class="modal fade" id="verPrestamo{{$key->id}}" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Informacion de Equipo</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <p>Codigo de Prestamo: {{$key->eq_modelo}}</p>
          <p>Fecha de Salida: {{$key->eq_marca}}</p>
          <p>Fecha de Entrada: {{$key->eq_nbiennacional}}</p>
          <p>Estado: {{$key->eq_estatus}}</p>
          <!--<a align="center">Imprimir comprobante</a>-->
          @include('admin.equipment.delete')
          </div>
      </div>
    </div>