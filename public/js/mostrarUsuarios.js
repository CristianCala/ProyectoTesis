$(document).ready( function () {
    $('#usersTable').DataTable({
      "serverSide":true,
		  "ajax": '/list_usuarios',
		  "columns":[
			  {data:"id"},
			  {data:"name"},
			  {data:"email"},
		]
    });
} );