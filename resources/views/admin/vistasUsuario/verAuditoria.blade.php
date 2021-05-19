
<button type="button" class="bg-blue-400 rounded-md" data-toggle="modal" data-target="#verAuditoria{{$key->id}}">
  Informacion
</button>

<!-- Modal -->
<div class="modal fade" id="verAuditoria{{$key->id}}" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Informacion de Equipo</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <p>Sistema operativo de maquina: {{$key->au_so}}</p>
          <p>IP: {{$key->au_ip}}</p>
          <p>Navegador: {{$key->au_navegador}}</p>
          <p>Fecha: {{$key->au_fecha}}</p>
          <!--<a align="center">Imprimir comprobante</a>-->
          @include('admin.auditoria.delete',['auditoria'=>$key])
          </div>
      </div>
    </div>