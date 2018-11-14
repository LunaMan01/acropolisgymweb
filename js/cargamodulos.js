$(document).ready(function() {
    $('.contenido').load('html/clientes.html');

    $('#clientesLink').click(function (e) { 
        e.preventDefault();
        $('.contenido').load('html/clientes.html');
    });

    $('#membresiasLink').click(function (e) { 
        e.preventDefault();
        $('.contenido').load('html/membresias.html');
        $('.clientesLink').removeClass('active');
        $('.membresiasLink').addClass('active');
    });

    $('#productosLink').click(function(e){
        e.preventDefault();
        $('.contenido').load('html/productos.html');
    });
});