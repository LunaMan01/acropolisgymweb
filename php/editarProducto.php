<?php
include 'conexion.php';
$conexion = $con;
$datos = json_decode($_POST['datos'], true);

$id_Producto = $datos[0];
$descripcion = $datos[1];
$precio = $datos[2];
$existencia = $datos[3];

if(!empty($id_Producto)){
    $resultado = $conexion->query('UPDATE productos set id_Producto ='.$id_Producto.', descripcion_Producto="'.$descripcion.'", precio='.$precio.', existencia='.$existencia.' WHERE id_Producto = '.$id_Producto);

    if($resultado) {
        echo "si";
    }else {
        // echo "no";
        echo mysqli_error($conexion);
    }
}
?>