$(document).ready(function() {
    $('#nuevaMembresiaForm').submit(function(e) {
        e.preventDefault();
        enviar();
        $('#nipCliente').val(" "); 
    });
    function enviar() {
        var datos = $('#nuevaMembresiaForm').serialize();
        $.ajax({
            type: "POST",
            url: "php/agregarMembresia.php",
            data: datos,
            success: function(data) {
                $('.cuerpoTabla').load("php/CargarMembresias.php");
                return;
            }
        });
        
    }
});

