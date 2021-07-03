
$(document).ready( function () {
    $('#prestamosTable').DataTable({
      "serverSide":true,
		  "ajax": '/list_prestamos',
		  "columns":[
			  {data:"id"},
			  {data:"pres_salida"},
			  {data:"pres_fecha_salida"},
			  {data:"pres_fecha_entrada"},
			  {data:"usuarios_us_id"},
			  {data:"equipos_eq_id"},
        {data:"pres_estatus"},
		]
    });
} );