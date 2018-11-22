<?php
    include 'conexion.php';
    $conexion = $con;

    // $nipCliente = $_POST['nipCliente'];
    $descripcionProductos = $_POST['descripcionProducto'];
    $precio = $_POST['precio'];
    $existencia = $_POST['existencia'];

    if(!empty($_POST["descripcionProducto"])){
        $resultado = $conexion->query("INSERT INTO productos (descripcion_Producto, precio, existencia) VALUES ('".$descripcionProductos."',".$precio.",
        ".$existencia.")");
        if(!$resultado){
            echo mysqli_error($conexion);
        }
    }

?>