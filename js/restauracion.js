$(document).ready(function () {
    $('#restaurar').click(function (e) {
        e.preventDefault();
        enviar();

    });

    function enviar() {
        var archivo = $('#archivo-restauracion').prop('files')[0];
        var form_data = new FormData();
        form_data.append('file', archivo);
        console.log(form_data);
        $.ajax({
            type: "POST",
            url: "php/restaurar.php",
            dataType: 'text',  
            cache: false,
            contentType: false,
            processData: false,
            data: form_data,
            success: function (data) {
                if(data == 'exito')
                    exito('La base de datos ha sido restaurada correctamente');
                else
                    error('Ha ocurrido un error');
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