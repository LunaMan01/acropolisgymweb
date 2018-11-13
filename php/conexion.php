<?php 
    function conexion() {
        $con = new mysqli("localhost", "root", "", "acropolisgymweb");
        if($con->connect_errno) {
            echo "Fallo al conectar a MySQL: (" . $con->connect . ") " . $con->connect_error;   
        }   
        return $con;
    }
    function buscar() {   
    }  
?>