//Edicion del equipo
$(document).ready(function() {
	$('.editBtn').on('click', function() {
<<<<<<< HEAD
		$('#editDepartamento').modal('show');
=======
		$('#editEquipo').modal('show');
>>>>>>> 22841bdefc4b8d2ad3b4b01820854cb895bb4df3

		//Recibir el value 
		$tr = $(this).closest('tr');

		var data = $tr.children("td").map(function() {
			return $(this).text();
		}).get();

			console.log(data);
		//validacion de data desde el ID
		$('#id').val(data[0]);
		$('#dep_nombre').val(data[1]);
				//Comunicacion con el formulario
<<<<<<< HEAD
		$('#editFrmDpto').on('submit', function(e) {
=======
		$('#editFormID').on('submit', function(e) {
>>>>>>> 22841bdefc4b8d2ad3b4b01820854cb895bb4df3
			e.preventDefault();

			var id = $('#id').val();
			//Ajax con la informacion para crear
			$.ajax({
				type: "PUT",
				url: "/departamentosUpdate/"+id,
<<<<<<< HEAD
				data: $('#editFrmDpto').serialize(),
				success: function(response) {
					console.log(response)
					$('#editDepartamento').modal('hide')
=======
				data: $('#editFormID').serialize(),
				success: function(response) {
					console.log(response)
					$('#editEquipo').modal('hide')
>>>>>>> 22841bdefc4b8d2ad3b4b01820854cb895bb4df3
					alert('Data Updated');
					//Recarga asincronica AJAX
					location.reload();
				},
				error: function(error) {
					console.log(error)
					alert('Data Not Updated');
				}
			});
		});


	});
});
