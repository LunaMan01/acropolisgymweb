$(document).ready(function() {
    $('#nuevoClienteForm').submit(function(e) {
        e.preventDefault();
        enviar();
        $('#nipCliente').val(" ");
    });

    function enviar() {
        var datos = $('#nuevoClienteForm').serialize();
        $.ajax({
            type: "POST",
            url: "php/agregarCliente.php",
            data: datos,
            success: function(data) { 
                console.log(data);
                return;
            }
        });
        
    }
});