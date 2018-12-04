$(document).ready(function () {
    var consulta;

    $('#buscarProducto').focus();
    $('#buscarProducto').keyup(function (e) {
        // e.preventDefault();
        consulta = $('#buscarProducto').val();

        $.ajax({
            type: "POST",
            url: "php/buscarProducto.php",
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