<?php
    session_start();
    $tipo = $_FILES['file']['type'];
    if ( 0 < $_FILES['file']['error'] ) {
        echo 'Error: ' . $_FILES['file']['error'] . '<br>';
    }
    else if($tipo == 'application/octet-stream'){
        
            move_uploaded_file($_FILES['file']['tmp_name'],  $_FILES['file']['name']);
            restoreDatabaseTables('localhost', $_SESSION['user'], $_SESSION['pass'], 'acropolisgymweb', $_FILES['file']['name']);
            unlink($_FILES['file']['name']);
            echo 'exito';
    }else {
        echo 'fallo';
        echo $tipo;
        
    }

    

    function restoreDatabaseTables($dbHost, $dbUsername, $dbPassword, $dbName, $filePath){
        // Connect & select the database
        $db = new mysqli($dbHost, $dbUsername, $dbPassword, $dbName); 
    
        // Temporary variable, used to store current query
        $templine = '';
        
        // Read in entire file
        $lines = file($filePath);
        
        $error = '';
        
        // Loop through each line
        foreach ($lines as $line){
            // Skip it if it's a comment
            if(substr($line, 0, 2) == '--' || $line == ''){
                continue;
            }
            
            // Add this line to the current segment
            $templine .= $line;
            
            // If it has a semicolon at the end, it's the end of the query
            if (substr(trim($line), -1, 1) == ';'){
                // Perform the query
                if(!$db->query($templine)){
                    $error .= 'Error performing query "<b>' . $templine . '</b>": ' . $db->error . '<br /><br />';
                }
                
                // Reset temp variable to empty
                $templine = '';
            }
        }
        return !empty($error)?$error:true;
    }
?>