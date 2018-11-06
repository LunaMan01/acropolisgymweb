$(document).ready(function() {
    
    $('.cuerpo').on('click','tr',function(e){
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
                console.log(mensaje);
            }

        });
    });
});