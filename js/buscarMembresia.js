$(document).ready(function () {
    var consulta;

    $('#buscarMembresia').focus();
    $('#buscarMembresia').keyup(function (e) {
        // e.preventDefault();
        consulta = $('#buscarMembresia').val();

        $.ajax({
            type: "POST",
            url: "php/buscarMembresia.php",
            data: "b= " +consulta,
            dataType: "html",
            error: function () {
                toastr.error('Ha ocurrido un error');
            },
            success: function (data) {
                console.log(consulta);
                $('.cuerpoTabla').html(data);
            }
        });

    });
});
