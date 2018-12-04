$(document).ready(function () {
    var consulta;

    $('#buscarCliente').focus();
    $('#buscarCliente').keyup(function (e) {
        // e.preventDefault();
        consulta = $('#buscarCliente').val();

        $.ajax({
            type: "POST",
            url: "php/buscarClientes.php",
            data: "b= " +consulta,
            dataType: "html",
            error: function () {
                toastr.error('Ha ocurrido un error');
                console.log("MAl");
            },
            success: function (data) {
                console.log(consulta);
                $('.cuerpoTabla').html(data);
            }
        });

    });
});