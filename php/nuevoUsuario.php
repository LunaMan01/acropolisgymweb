<?php
include 'conexion.php';
$conexion = $con;
// if ($conexion->connect_errno) {
//     echo "Fallo al conectar MySQL";
//     exit();
// }

$user_name = $_POST['user-name'];
$pass = $_POST['user-pass'];

if(isset($_POST['todos_privilegios']))
    $todos_privilegios = $_POST['todos-privilegios'];

$queryPrivilegios = "GRANT ";

// if($_POST['select-check'] == 'on');
//     echo "alv";

foreach($_POST as $privilegio) {
    if($privilegio == 'SELECT' or $privilegio == 'INSERT') {
        $queryPrivilegios .= $privilegio.", ";   
    }
}

$queryPrivilegios1 = ltrim($queryPrivilegios, ',');
echo $queryPrivilegios1;



// echo $queryPrivilegios;

// if(!empty($_POST["user-name"])) {
//     $query = "CREATE user '".$user_name."'@'localhost' identified by '".$pass."'";    
//     echo $query;
//     $resultado = $conexion->query($query);
//     $resultado = $conexion->query($queryPrivilegios);
// }
?>