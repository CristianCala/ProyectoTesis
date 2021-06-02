/*Ajax para la edicion y creacion de usuarios*/


//Creacion
$(document).ready(function() {

        //Comunicacion con el formulario
        $('#addFrm').on('submit', function(e) {
            e.preventDefault();
            //Ajax con la informacion para crear
            $.ajax({
                type: "POST",
                url: "/usersAdd",
                data: $('#addFrm').serialize(),
                success: function(response) {
                    console.log(response)
                    $('#userModal').modal('hide')
                    alert('Data Saved');
                    location.reload();
                },
                error: function(error) {
                    console.log(error)
                    alert('Data Not Saved');
                }
            });
        });
    });

//Edicion

$(document).ready(function() {
    $('.editBtn').on('click', function() {
        $('#userEdit').modal('show');

        //Recibir el value 
        $tr = $(this).closest('tr');

        var data = $tr.children("td").map(function() {
            return $(this).text();
        }).get();

            console.log(data);
        //validacion de data desde el ID
        $('#id').val(data[0]);
        $('#name').val(data[1]);
        $('#email').val(data[2]);

                //Comunicacion con el formulario
        $('#editFrmID').on('submit', function(e) {
            e.preventDefault();

            var id = $('#id').val();
            //Ajax con la informacion para crear
            $.ajax({
                type: "PUT",
                url: "/usersUpdate/"+id,
                data: $('#editFrmID').serialize(),
                success: function(response) {
                    console.log(response)
                    $('#userEdit').modal('hide')
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


