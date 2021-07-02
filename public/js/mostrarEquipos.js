
//Mostrar equipos


$(document).ready( function () {
    $('#equiposTable').DataTable(
		{
			"serverSide":true,
				"ajax": '/list_equipos',
				"columns":[
					{data:"id"},
					{data:"eq_serial"},
					{data:"eq_tequid"},
					{data:"eq_nbiennacional"},
					{data:"eq_estatus"},
					{data:"modelos.mdl_nombre"},
			  {data:"marcas.mar_nombre"},
			  {data:"departamentos.dep_nombre"},
			  ]
		  }
	);
} );
