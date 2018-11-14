$(document).ready(function() {
    $('#nuevoClienteForm').submit(function(e) {
        e.preventDefault();
        enviar();
        $('#nombre').val("");
        $('#apellidoPaterno').val("");
        $('#apellidoMaterno').val("");
        $('#edad').val("");
        $('#genero').val("");
        $('#peso').val("");
        $('#problemas').val("");
        $('#notas').val("");
    });     
    
    function enviar() {
        var datos = $('#nuevoClienteForm').serialize();
        $.ajax({
            type: "POST",
            url: "php/agregarCliente.php",
            data: datos,
            success: function(data) { 
                $('.cuerpo').load('php/cargarClientes.php');
                console.log("Bien");
                console.log(data);
            }
        });
        
    }

});