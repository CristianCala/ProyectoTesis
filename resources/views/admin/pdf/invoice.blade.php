


<fieldset>
  <center>
  	<h1>Reporte de equipos</h1>
        @foreach($equipos as $key)
      <p>{{$key->eq_modelo}}</p>
      <p>{{$key->eq_marca}}</p>
      <p>{{$key->eq_serial}}</p>
      <p>{{$key->eq_nbiennacional}}</p>
      <p>{{$key->eq_estatus}}</p>
    @endforeach
  </center>
</fieldset>