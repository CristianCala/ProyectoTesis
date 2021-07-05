
//Mostrar equipos


$(document).ready( function () {
    $('#equiposTable').DataTable(
		{
			"serverSide":true,
				"ajax": '/list_equipos',
				"columns":[
					{data:"id"},
					{data:"eq_serial"},
					{data:"tipo_equipos.teq_nombre"},
					{data:"eq_nbiennacional"},
					{data:"eq_estatus"},
					{data:"marcas.mar_nombre"},
					{data:"modelos.mdl_nombre"},
			  {data:"departamentos.dep_nombre"},
			  {defaultContent:"<button class='btn btn-success btn-claro-success fw-bold0' data-bs-toggle='modal'data-bs-target='#editEquipo'>Editar</button>"},
			  ]
		  }
	);
		
} );
