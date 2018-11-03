$(document).ready(function() {
    var consulta;

    $('#buscar').focus();

    $('#buscar').keyup(function (e) { 
        consulta = $('#buscar').val();
        // console.log(consulta);
        $.ajax({
            type: "POST",
            url: "php/busqueda.php",
            data: "b="+consulta,
            dataType: "html",
            // beforeSend: function() {
            //     console.log('entro');
            // },
            error: function() {
                alert('error petivion ajax');
            },
            success: function(data) {
                $('.carga').empty();
                $('.carga').html(data);
                // console.log('sigue');
            }
        });
    });
});