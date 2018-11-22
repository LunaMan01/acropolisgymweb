$(document).ready(function () {
    $('.contenido').load('html/clientes.html');

    $('#clientesLink').click(function (e) {
        e.preventDefault();
        $('.clientesLink').siblings().removeClass('active');
        $('.clientesLink').addClass('active');
        $('.contenido').load('html/clientes.html');
    });

    $('#membresiasLink').click(function (e) {
        e.preventDefault();
        $('.contenido').load('html/membresias.html');
        $('.membresiasLink').siblings().removeClass('active');
        $('.membresiasLink').addClass('active');
    });

    $('#notasLink').click(function (e) {
        e.preventDefault();
        $('.contenido').load('html/notas.html');
        $('.notasLink').siblings().removeClass('active');
        $('.notasLink').addClass('active');
    });

    $('#productosLink').click(function (e) {
        e.preventDefault();
        $('.contenido').load('html/productos.html');
        $('.productosLink').siblings().removeClass('active');
        $('.productosLink').addClass('active');
    });

    $('#herramientasLink').click(function (e) {
        e.preventDefault();
        $('.herramientasLink').siblings().removeClass('active');
        $('.herramientasLink').addClass('active');
        if ($('.submenu-herramientas').hasClass('d-none'))
            $('.submenu-herramientas').removeClass('d-none');
        else
            $('.submenu-herramientas').addClass('d-none');
    });

    $('#nuevo-usuario').click(function (e) {
        e.preventDefault();
        $('.contenido').load('html/nuevo-usuario.html');
        $('.nuevo-usuario').siblings().removeClass('active');
        $('.nuevo-usuario').addClass('active');
    });

    $('#respaldos').click(function (e) {
        e.preventDefault();
        $('.contenido').load('html/respaldos.html');
        $('.respaldos').siblings().removeClass('active');
        $('.respaldos').addClass('active');
    });

});