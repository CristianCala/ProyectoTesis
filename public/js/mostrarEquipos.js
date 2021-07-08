
//Mostrar equipos


$(document).ready( function () {
   tablaEquipos = $("#equiposTable").DataTable(
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
				{defaultContent: "<button class='btn btn-success btn-claro-success fw-bold' data-bs-toggle='modal' data-bs-target='#editEquipo'>Editar</button>"}
			  ]	
		  }
	);
		
} );

$("#marcas_mar_id").change(function(){
	$.ajax({
		url: "{{ route('admin.equipos.list_modelos') }}?modelos=" + $(this).val(),
		method: 'GET',
		success: function(data) {
			$('#modelos_mdl_id').html(data.html);
		}
	});
});