$(document).ready(function() {
    $('#log').submit(function (e) { 
            e.preventDefault();
            enviar();
    });
    function enviar() {
        var datos = $('#log').serialize();
        console.log(datos);
        $.ajax({
            type: "POST",
            url: "php/login.php",
            data: datos,
            success: function(data) {
                if(data == 1)
                    $('body').load('principal.html');
                else
                    console.log('Vuelve a ingresar tu credencial');    
            }
        });
    }
});
