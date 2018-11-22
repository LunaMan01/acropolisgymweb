<?php
include 'conexion.php';
$conexion = $con;


$nipCliente = $_POST['nipCliente'];
$fechaInicio = $_POST['fechaInicio'];
$fechaFin = $_POST['fechaFin'];

if(!empty($_POST["nipCliente"]))
    $query = "INSERT INTO membresias (NIP_Cliente, fecha_Inicio, fecha_Fin) VALUES (".$nipCliente.",'".$fechaInicio."','".$fechaFin."')";
    $resultado = $conexion->query($query);
    if($resultado)
        echo "si";
    else
        echo "no";

?>