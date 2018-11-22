<?php
include 'conexion.php';
$consulta  = $con;
$dato = $_POST['b'];

if($dato != " "){
    $DATEF = ltrim($dato);
    $DATE = "'%".$DATEF."%'";
    
    if (isset($dato)) {
        $con="select * from membresias where id_Membresia like ".$DATE."or NIP_Cliente like".$DATE." or fecha_Inicio like ".$DATE."or fecha_Fin like".$DATE;
        $resultado = $consulta->query($con);
        if($resultado) {
            while($reg=mysqli_fetch_array($resultado))  {
    
                echo '<tr class="registro">
                    <td>'.$reg[0].'</td>'.
                    '<td>'.$reg[1].'</td>'.
                    '<td>'.$reg[2].'</td>'.
                    '<td>'.$reg[3].'</td> </tr>';
            }
        }else {
            echo mysqli_error($consulta);
        }
        // echo $DATEF;    
        
    }
} else {
    $resultado = $consulta->query("SELECT * FROM membresias");
    while($reg=mysqli_fetch_array($resultado))  {
        echo '<tr class="registro">
            <td>'.$reg[0].'</td>'.
            '<td>'.$reg[1].'</td>'.
            '<td>'.$reg[2].'</td>'.
            '<td>'.$reg[3].'</td> </tr>';
    }
}


?>