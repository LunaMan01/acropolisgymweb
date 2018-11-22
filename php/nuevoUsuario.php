<?php
include 'conexion.php';
$conexion = $con;
if ($conexion->connect_errno) {
    echo "Fallo al conectar MySQL";
    exit();
}



$user_name = $_POST['user-name'];
$pass = $_POST['user-pass'];
$conexion->query('use mysql');
$query = "SELECT user from user where user like '".$user_name."'";
$resultado = $conexion->query($query);

$count = mysqli_num_rows($resultado);
if($count > 0){
    echo 0;
    exit;
}
else {
    $conexion->query('use acropolisgymweb');
}

if(!empty($_POST["user-name"])) {
        $query = "CREATE user '".$user_name."'@'localhost' identified by '".$pass."'";
        $resultado = $conexion->query($query);    
}

$queryPrivilegios = "GRANT ";

if(isset($_POST['todos-privilegios'])){
    $queryPrivilegios .= 'ALL PRIVILEGES';
}
else if(isset($_POST['privilegios'])) {
    $privi = $_POST['privilegios'];
    foreach($privi as $privilegio) {
        $queryPrivilegios .= $privilegio.",";       
    }
}

$queryPrivilegios = trim($queryPrivilegios, ',');
$queryPrivilegios .= ' ON ';
if(isset($_POST['todas-tablas'])) {
    $queryPrivilegios .= "acropolisgymweb.* to '".$user_name."'@'localhost'";
    $resultado = $conexion->query($queryPrivilegios);
}
else if(isset($_POST['tablas'])) {
    $tablas = $_POST['tablas'];
    foreach($tablas as $tabla) {
        $toTables = "acropolisgymweb.".$tabla." to '".$user_name."'@'localhost'"; 
        $resultado = $conexion->query($queryPrivilegios.$toTables);
    }
}
$conexion->query("FLUSH PRIVILEGES");
echo 1;
?>