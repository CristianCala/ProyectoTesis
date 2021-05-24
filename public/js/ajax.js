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