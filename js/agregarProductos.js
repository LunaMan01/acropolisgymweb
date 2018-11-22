$(document).ready(function() {
    $('#nuevoProductoForm').submit(function(e) {
        e.preventDefault();
        enviar();
        $('#descripcionProducto').val(" ");
        $('#precio').val("");
        $('#existencia').val("");
    });     
    
    function enviar() {
        var datos = $('#nuevoProductoForm').serialize();
        $.ajax({
            type: "POST",
            url: "php/agregarProductos.php",
            data: datos,
            success: function(data) { 
                $('.cuerpoTabla').load('php/cargarProductos.php');

                console.log(data);
                return;
            }

        });
        
    }

});