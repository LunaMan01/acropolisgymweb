$(document).ready(function () {
    console.log('dfd');
    $('tbody').on('click', 'tr', function (e) {
        // e.preventDefault();
        $(this).addClass('bg-info').siblings().removeClass('bg-info');
        // $(this).focus();

    });

    $('#eliminarmembresia').click(function (e) {
        e.preventDefault();
        var id = $('.bg-info').find('td:first').html();
        console.log(id);
        $.ajax({
            type: "POST",
            url: "php/eliminarMembresia.php",
            data: "id="+id,
            success: function (data) {
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
                console.log(data);
            }
        });

    });
});