<?php
include 'conexion.php';
$conexion = $con;
// if ($conexion->connect_errno) {
//     echo "Fallo al conectar MySQL";
//     exit();
// }

$nipCliente = $_POST['nipCliente'];
$fechaInicio = $_POST['fechaInicio'];
$fechaFin = $_POST['fechaFin'];

if(!empty($_POST["nipCliente"]))
    $query = "INSERT INTO membresias (NIP_Cliente, fecha_Inicio, fecha_Fin) VALUES (".$nipCliente.",'".$fechaInicio."','".$fechaFin."')";
    echo $query;
    $resultado = $conexion->query($query);
// }
?>