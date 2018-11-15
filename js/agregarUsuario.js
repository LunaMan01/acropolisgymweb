$(document).ready(function() {
    $('#nuevoUsuarioForm').submit(function(e) {
        e.preventDefault();
        enviar();

    });     
    
    function enviar() {
        var datos = $('#nuevoUsuarioForm').serialize();
        $.ajax({
            type: "POST",
            url: "php/nuevoUsuario.php",
            data: datos,
            success: function(data) { 
                console.log(data);
                return;
            }

        });
        
    }

});