<?php
    include 'conexion.php';
    $conexion = conexion();

    $nipCliente = $_POST['nipCliente'];
    $nombreCliente = $_POST['nombre'];
    $apellidoPaterno = $_POST['apellidoPaterno'];
    $apellidoMaterno = $_POST['apellidoMaterno'];
    $edadCliente = $_POST['edad'];
    $genero = $_POST['genero'];
    $pesoCliente = $_POST['peso'];
    $problemasSalud = $_POST['problemas'];
    $notaCliente = $_POST['notas'];

    if(!empty($_POST["nipCliente"]))
        $resultado = $conexion->query("INSERT INTO clientes (NIP_Cliente, nombre_Cliente, apellido_Paterno, apellido_Materno, edad_Cliente, 
        genero, peso_Cliente, problemas_Salud_Cliente, nota_Cliente) VALUES (".$nipCliente.",'".$nombreCliente."','".$apellidoPaterno."',
        '".$apellidoMaterno."','".$edadCliente."','".$genero."','".$pesoCliente."','".$problemasSalud."','".$notaCliente."')");
?>