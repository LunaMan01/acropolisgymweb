$(document).ready(function() {
    $('#nuevoClienteForm').submit(function(e) {
        e.preventDefault();
        enviar();

    });     
    
    function enviar() {
        var datos = $('#nuevoClienteForm').serialize();
        $.ajax({
            type: "POST",
            url: "php/agregarCliente.php",
            data: datos,
            success: function(data) { 
                $('.cuerpo').load('php/cargarClientes.php');

                console.log(data);
                return;
            }

        });
        
    }

});