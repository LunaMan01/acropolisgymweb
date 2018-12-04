var valoresOriginales;
$(document).ready(function () {


    $(document).on('click', '#btn-modificar', function (event) {
        event.preventDefault();

        ocultarElementos();
        hacerCamposEditables();
        valoresOriginales = $(".bg-info td").map(function () {
            return $(this).text();
        });

    });

    $(document).on('click', '#cancelarEdicion', function (event) {
        event.preventDefault();


        $('#seleccionado .editable')
            .attr('contenteditable', 'false')
            .removeClass('bg-secondary');
        cancelar(valoresOriginales);
    });

    $(document).on('click', '#guardarEdicion', function (event) {
        event.preventDefault();


        $('#seleccionado .editable')
            .attr('contenteditable', 'false')
            .removeClass('bg-secondary');

        guardar();

    });


    function guardar() {

        var nuevosValores = $("#seleccionado td").map(function () {
            return $(this).text();
        });
        enviarDatos(nuevosValores);

    }

    function enviarDatos(nuevosValores) {

        $.ajax({
            type: "POST",
            url: "php/editarClientes.php",
            data: { "datos": JSON.stringify(nuevosValores) },
            success: function (mensaje) {
                console.log(mensaje);
                if (mensaje.indexOf("si") > -1) {
                    exito();

                } else {
                    fallo();
                }
                terminado();
            }
        });
    }

    function exito() {
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
        toastr.success('Modificado con exito');
    }

    function fallo() {
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
        toastr.error('Ha ocurrido un error');
        $('.cuerpoTabla').load('php/CargarClientes.php');
    }

    function ocultarElementos() {
        $('#agregar').addClass('d-none');
        $('#btn-eliminar').addClass('d-none');
        $('#btn-modificar').addClass('d-none');
        $('#guardar').removeClass('d-none');
        $('#cancelar').removeClass('d-none');

    }

    function cancelar(valoresOriginales) {
        $("#seleccionado td").map(function (i) {
            $(this).text(valoresOriginales[i]);
        });
        terminado();
    }

    function terminado() {
        $('#agregar').removeClass('d-none');
        $('#btn-eliminar').removeClass('d-none');
        $('#btn-modificar').removeClass('d-none');
        $('#guardar').addClass('d-none');
        $('#cancelar').addClass('d-none');
        $("#seleccionado").removeAttr('id');

    }

    function hacerCamposEditables() {
        $('.bg-info .editable')
            .attr('contenteditable', 'true')
            .addClass('bg-secondary');
        $('.bg-info').attr('id', 'seleccionado');
        $('#seleccionado .fecha-input').remove();
        $('#seleccionado .fecha-fin-input').remove();
        $('<input type="date" class="fecha-input"/>').appendTo($('#seleccionado .fecha-inicio-td'));
        $('<input type="date" class="fecha-fin-input"/>').appendTo($('#seleccionado .fecha-fin-td'));

    }

});