$(document).ready(function() {
    $('.cuerpoTabla').load('php/CargarMembresias.php');

    $('.check-vencidas').change(function() {
        if(this.checked) {
            $('.cuerpoTabla').load('php/CargarMembresiasVencidas.php');
        }else {
            $('.cuerpoTabla').load('php/CargarMembresias.php');
        }
           
    });
});