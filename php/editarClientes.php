<?php
include 'conexion.php';
$conexion = $con;
$datos = json_decode($_POST['datos'], true);

$nipCliente = $datos[0];
$nombreCliente = $datos[1];
$apellidoPaterno = $datos[2];
$edad = $datos[3];
$genero = $datos[4];

if(!empty($nipCliente)){
    $resultado = $conexion->query('UPDATE clientes set nombre_Cliente ="'.$nombreCliente.'", apellido_Paterno="'.$apellidoPaterno.'" , edad_Cliente='.$edad.', genero="'.$genero.'" WHERE NIP_Cliente = '.$nipCliente);
    if($resultado) {
        echo "si";
    }else {
        echo "no";
    }
}
?>