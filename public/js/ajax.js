<<<<<<< HEAD
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
                    $('#candidatoDataModal').modal('hide')
                    alert('Data Saved');
                    window.location.reload();
                },
                error: function(error) {
                    console.log(error)
                    alert('Data Not Saved');
                }
            });
        });
    });



//Edition ajax modal

$(document).ready(function() {
    $('.editBtn').on('click', function() {
        $('#candidatoEditModal').modal('show');

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
                    $('#candidatoEditModal').modal('hide')
                    alert('Data Updated');
                    //Recarga asincronica AJAX
                    window.location.reload();
                },
                error: function(error) {
                    console.log(error)
                    alert('Data Not Updated');
                }
            });
        });


    });
});
=======
$("#equipoFrm").submit(function (e) {
    e.preventDefault();

    let eq_modelo = $("#eq_modelo").val();
    let eq_marca = $("#eq_marca").val();
    let eq_serial = $("#eq_serial").val();
    let eq_nbiennacional = $("#eq_nbiennacional").val();
    let eq_estatus = $("#eq_estatus").val();
    let _token = $("input[name=_token]").val();

    $.ajax({
        url: "route{{'admin.equipment.add'}}",
        type: "POST",
        data:{
            eq_modelo: eq_modelo,
            eq_marca: eq_marca,
            eq_serial: eq_serial,
            eq_nbiennacional: eq_nbiennacional,
            eq_estatus: eq_estatus,
            _token: _token
        },
        success:function (response) {
            if (response) {
                $("#equiposTable tbody").prepend('<tr><td>' + response.eq_modelo + 
                                                '</td><td>'+ response.eq_marca +
                                                '</td><td>' + response.eq_serial +
                                                '</td><td>'+ response.eq_nbiennacional +
                                                '</td> <td>'+ response.eq_estatus +
                                                '</td> </tr>');
                $("#equipoFrm")[0].reset();
                $("#exampleModalTwo")[0].modal("hide");
            }
        }
    });
})
>>>>>>> 070bdc088875dc6afdc42bf8d91d687df636ef80
