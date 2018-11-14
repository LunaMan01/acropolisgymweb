<?php
include 'conexion.php';
$consulta  = $con;
$dato = $_POST['b'];

if($dato != " "){
    $DATEF = ltrim($dato);
    $DATE = "'".$DATEF."'";
    
    if (isset($dato)) {
    // $resultado = $consulta->query('SELECT * FROM membresias WHERE id_Membresia ='.$dato." OR fecha_Inicio = ".$dato." OR NIP_Cliente =".$dato);
    //     $resultado = $consulta->query('SELECT * FROM membresias WHERE id_Membresia ='.$dato." OR `fecha_Inicio` like '".$dato."' OR NIP_Cliente= ".$dato);
        // $resultado = $consulta->query('SELECT * FROM membresias WHERE fecha_Fin LIKE '.$DATE);
        // "SELECT * FROM membresias WHERE fecha_Inicio LIKE '%$surname%'";
        $con="select * from membresias where fecha_Inicio like ".$DATE;
        $resultado = $consulta->query($con);
        if($resultado) {
            while($reg=mysqli_fetch_array($resultado))  {
    
                echo '<tr class="registro">
                    <td>'.$reg[3].'</td>'.
                    '<td>'.$reg[0].'</td>'.
                    '<td>'.$reg[1].'</td>'.
                    '<td>'.$reg[2].'</td> </tr>';
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
            <td>'.$reg[3].'</td>'.
            '<td>'.$reg[0].'</td>'.
            '<td>'.$reg[1].'</td>'.
            '<td>'.$reg[2].'</td> </tr>';
    }
}


?>


