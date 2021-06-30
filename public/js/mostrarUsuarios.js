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
			  {data:"acciones"},
		]
    });
} );