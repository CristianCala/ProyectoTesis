
//Mostrar equipos
$(document).ready( function () {

   tablaEquipos = $("#equiposTable").DataTable(
			{
        "language": {
          "url": "//cdn.datatables.net/plug-ins/1.10.15/i18n/Spanish.json"
        },
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

/*
$("#marcas_mar_id").change(function(){
	$.ajax({
		url: "{{ route('admin.equipos.list_modelos') }}?modelos=" + $(this).val(),
		method: 'GET',
		success: function(data) {
			$('#modelos_mdl_id').html(data.html);
		}
	});
});*/

$(document).ready(function () {
	$('#marcas_mar_id').on('change', function () {
		var marca_mar_id = $(this).val();
		if ($.trim(marca_mar_id) != '') {
			$.get('list_modelos', {marca_mar_id: marca_mar_id}, function(modelos) {
				$('#modelos_mdl_id').empty();
				$('#modelos_mdl_id').append("<option value=''>Selecciona un modelo</option>");
				$.each(modelos, function (index, value) {
				$('#modelos_mdl_id').append("<option value='"+index+"'>"+value+"</option>");
				})
			});
		}
	});
});