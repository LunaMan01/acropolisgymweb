<?php 
    session_start();
    $_SESSION['user'] = $_POST['user'];
    $_SESSION['pass'] = $_POST['pass'];


    $con = new mysqli("localhost", $_SESSION['user'], $_SESSION['pass'], "acropolisgymweb");


    if($con) {
        echo 1;
    }else {
        echo 0;
    }
?>