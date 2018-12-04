$(document).ready(function() {
    
    $('.cuerpoTabla').on('click','tr',function(e){
        $(this).addClass('bg-info').siblings().removeClass('bg-info');
    });


    $('#btn-eliminar').click(function(e){
        var id_Cliente = $('.bg-info').find('td:eq(0)').text();

        $.ajax({
            type: 'POST',
            data: "id=" + id_Cliente,
            url: "php/eliminarClientes.php",
            
            success: function(mensaje){
                $('.bg-info').remove();
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
                toastr.success('Eliminado con exito');
                console.log(mensaje);
            }

        });
    });
});