<?php
    include 'conexion.php';
    $conexion = $con;

    // $nipCliente = $_POST['nipCliente'];
    $nombreCliente = $_POST['nombreCliente'];
    $apellidoPaterno = $_POST['apellidoPaterno'];
    $apellidoMaterno = $_POST['apellidoMaterno'];
    $edadCliente = $_POST['edad'];
    $genero = $_POST['genero'];
    $pesoCliente = $_POST['peso'];
    $problemasSalud = $_POST['problemas'];
    $notaCliente = $_POST['notas'];

    if(!empty($_POST["nombreCliente"])){
        $resultado = $conexion->query("INSERT INTO clientes (nombre_Cliente, apellido_Paterno, apellido_Materno, edad_Cliente, 
        genero, peso_Cliente, problemas_Salud_Cliente, nota_Cliente) VALUES ('".$nombreCliente."','".$apellidoPaterno."',
        '".$apellidoMaterno."','".$edadCliente."','".$genero."','".$pesoCliente."','".$problemasSalud."','".$notaCliente."')");
        if(!$resultado){
            echo mysqli_error($conexion);
        }
    }

?>