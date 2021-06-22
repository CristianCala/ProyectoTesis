//Edicion del equipo
$(document).ready(function() {
	$('.editBtn').on('click', function() {
		$('#editEquipo').modal('show');

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
		$('#editFormID').on('submit', function(e) {
			e.preventDefault();

			var id = $('#id').val();
			//Ajax con la informacion para crear
			$.ajax({
				type: "PUT",
				url: "/departamentosUpdate/"+id,
				data: $('#editFormID').serialize(),
				success: function(response) {
					console.log(response)
					$('#editEquipo').modal('hide')
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
