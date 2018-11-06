<?php
    include 'conexion.php';

    $id_Cliente = $_POST["id"];
    
    $query = conexion();

    $resultado = $query->query("DELETE FROM clientes WHERE NIP_Cliente =".$id_Cliente);

    if($resultado){
        echo "jalo";
    }
    else{
        echo mysqli_error($query);
    }

?>
