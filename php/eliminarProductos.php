<?php
    include 'conexion.php';

    $id_Producto = $_POST["id"];
    
    $query = $con;

    $resultado = $query->query("DELETE FROM productos WHERE id_Producto =".$id_Producto);

    if($resultado){
        echo "jalo";
    }
    else{
        echo mysqli_error($query);
    }

?>
