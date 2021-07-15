$(document).ready( function () {
    $('#usersTable').DataTable({
	processing: true,
    serverSide:true,
		  "ajax": '/list_usuarios',
		  "columns":[
			  {data:"id"},
			  {data:"nombre"},
			  {data:"apellido"},
			  {data:"cedula"},
			  {data:"email"},
			  {data:"usuario"},
			  {data:"estatus"},
			  //{data:"rols.rol_nombre"},
		]
    });
	//obtenerData("#equiposTable tbody", tablaEquipos);
} );

/*
var obtenerData = function(tbody, tablaEquipos){
	$(tbody).on('click', 'button.editBtn', function () {
		var data = tablaEquipos.row($(this).parents('tr')).data();
		var id = $('#id').val(data.id),
		nombre= $('#nombreModalUserEdit').val(data.nombre),
		apellido=$('#apellidoModalUserEdit').val(data.apellido),
		email=$('#emailModalUserEdit').val(data.email),
		usuario=$('#usuarioModalUserEdit').val(data.usuario),
        estatus=$('#estatusModalUserEdit').val(data.estatus);
	})
}*/