<?php 

       

        session_start();
        echo $_SESSION['user'];
        $con = new mysqli("localhost", $_SESSION['user'], $_SESSION['pass'], "acropolisgym");

        if($con->connect_errno) {
            echo "Fallo al conectar a MySQL: (" . $con->connect . ") " . $con->connect_error;
        }     
    
?>