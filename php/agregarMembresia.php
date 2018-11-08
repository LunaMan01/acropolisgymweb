<?php
include 'conexion.php';
$conexion = conexion();
// if ($conexion->connect_errno) {
//     echo "Fallo al conectar MySQL";
//     exit();
// }
$nipCliente = $_POST['nipCliente'];
$fechaInicio = $_POST['fechaInicio'];
$fechaFin = $_POST['fechaFin'];
if(!empty($_POST["nipCliente"]))
    $conexion->query("INSERT INTO membresias (NIP_Cliente, fecha_Inicio, fecha_Fin) VALUES (".$nipCliente.",'".$fechaInicio."','".$fechaFin."')");
// }
?>