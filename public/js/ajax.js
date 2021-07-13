/*Ajax para la edicion y creacion de usuarios*/

/*
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
                $('#UserRegister').modal('hide')
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
    $('#UserEdit').modal('show');

    //Recibir el value 
    $tr = $(this).closest('tr');

    var data = $tr.children("td").map(function() {
        return $(this).text();
    }).get();

        console.log(data);
    //validacion de data desde el ID
    $('#id').val(data[0]);
    $('#nombre').val(data[1]);
    $('#apellido').val(data[2]);
    $('#cedula').val(data[3]);
    $('#usuario').val(data[4]);
    $('#email').val(data[5]);
    $('#estatus').val(data[6]);

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
                $('#UserEdit').modal('hide')
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

    $(document).ready(function() {
      $('#equiposTable').DataTable({
        "language": {
          "url": "//cdn.datatables.net/plug-ins/1.10.15/i18n/Spanish.json"
        }
      });
    });*/

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
    $('#UserEdit').modal('show');

    //Recibir el value 
    $tr = $(this).closest('tr');

    var data = $tr.children("td").map(function() {
        return $(this).text();
    }).get();

        console.log(data);
    //validacion de data desde el ID
    $('#id').val(data[0]);
    $('#nombre').val(data[1]);
    $('#apellido').val(data[2]);
    $('#cedula').val(data[3]);
    $('#usuario').val(data[4]);
    $('#email').val(data[5]);
    $('#estatus').val(data[6]);

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
                $('#UserEdit').modal('hide')
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
