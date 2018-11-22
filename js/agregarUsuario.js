$(document).ready(function () {
    $('#nuevoUsuarioForm').submit(function (e) {
        e.preventDefault();
        var username = $('#user-name').val();
        var passOriginal = $('#user-pass').val();
        var passConfirmacion = $('#user-pass-confirmacion').val();
        if (esValidoElPass(passOriginal, passConfirmacion) && esValidoElUsuario(username)) {
            enviar();
        }


    });

    function enviar() {
        var datos = $('#nuevoUsuarioForm').serialize();
        $.ajax({
            type: "POST",
            url: "php/nuevoUsuario.php",
            data: datos,
            success: function (data) {
                console.log(data);
                if (data.indexOf("1") > -1) {
                    exito('Usuario añadido con éxito');
                } else {
                    error('Ha ocurrido un problema, vuelva a intertar');
                }
            }

        });

    }

    function esValidoElUsuario(username) {
        if (tieneEspaciosEnBlanco(username)) {
            error('El nombre de usuario no puede contener espacios en blanco');
            $('#user-name').addClass('bg-danger');
            return false;
        }

        return true;
    }

    function esValidoElPass(passOriginal, passConfirmacion) {
        if (tieneEspaciosEnBlanco(passOriginal)) {
            error('La contraseña no puede tener espacios en blanco');
            $('#user-pass').addClass('bg-danger');
            return false;
        }
        if (passOriginal != passConfirmacion) {
            error('Las contraseñas no coiciden');
            return false;
        }
        return true;
    }

    function tieneEspaciosEnBlanco(text) {
        var noValido = /\s/;
        if (noValido.test(text)) {
            return true;
        }
        return false;
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