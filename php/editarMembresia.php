<?php
include 'conexion.php';
$conexion = $con;
$datos = json_decode($_POST['datos'], true);

$id = $datos[0];
$nipCliente = $datos[1];
$fechaInicio = $datos[2];
$fechaFin = $datos[3];
if(!empty($nipCliente)){
    $resultado = $conexion->query('UPDATE membresias set NIP_Cliente ='.$nipCliente.' , fecha_inicio="'.$fechaInicio.'" , fecha_Fin="'.$fechaFin.'" WHERE id_Membresia = '.$id);
    if($resultado) {
        echo "si";
    }else {
        echo "no";
    }
}
?>