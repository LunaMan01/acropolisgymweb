<?php
include 'conexion.php';
$conexion = $con;
// if ($conexion->connect_errno) {
//     echo "Fallo al conectar MySQL";
//     exit();
// }

$user_name = $_POST['user-name'];
$pass = $_POST['user-pass'];
$todos_privilegios = $_POST['todos-privilegios'];

$privilegios = $_POST['privilegios'];

$query = "";
$queryPrivilegios="";

if($todos_privilegios == 'on') {
    $queryPrivilegios = "GRANT ALL privileges on acropolisgymweb.* to '".$user_name."'@'localhost'";
} else {
    foreach($privilegio as $privilegios) {
        if($privilegio == 'on') {
            $queryPrivilegios .= $privilegios. ", ";
        }
    }
}

echo $queryPrivilegios;

// if(!empty($_POST["user-name"])) {
//     $query = "CREATE user '".$user_name."'@'localhost' identified by '".$pass."'";    
//     echo $query;
//     $resultado = $conexion->query($query);
//     $resultado = $conexion->query($queryPrivilegios);
// }
?>