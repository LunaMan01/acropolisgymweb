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
                if(data.indexOf("si") > -1){
                    exito("Membresia agregada con exito");
                    $('.cuerpoTabla').load('php/CargarMembresias.php');
                }
                else {
                    error('Ocurrio un error al agregar membresia');
                }
                
            }
        });
        
    }

    function exito(mensaje) {
        toastr.options = {
            "closeButton": true,
            "debug": false,
            "newestOnTop": false,
            "progressBar": false,
            "positionClass": "toast-top-right",
            "preventDuplicates": false,
            "onclick": null,
            "showDuration": "300",
            "hideDuration": "1000",
            "timeOut": "5000",
            "extendedTimeOut": "1000",
            "showEasing": "swing",
            "hideEasing": "linear",
            "showMethod": "fadeIn",
            "hideMethod": "fadeOut"
        }
        toastr.success(mensaje);
    }

    function error(mensaje) {
        toastr.options = {
            "closeButton": true,
            "debug": false,
            "newestOnTop": false,
            "progressBar": false,
            "positionClass": "toast-top-right",
            "preventDuplicates": false,
            "onclick": null,
            "showDuration": "300",
            "hideDuration": "1000",
            "timeOut": "5000",
            "extendedTimeOut": "1000",
            "showEasing": "swing",
            "hideEasing": "linear",
            "showMethod": "fadeIn",
            "hideMethod": "fadeOut"
        }
        toastr.error(mensaje);
    }
});

