<?php
include 'conexion.php';
$conexion = conexion();
$idMembresia = $_POST['id'];
$resultado = $conexion->query("DELETE FROM membresias WHERE id_Membresia = ".$idMembresia."");

if($resultado)
    echo 'bien';
?>