<?php
include 'conexion.php';
$consulta  = conexion();
$dato = $_POST['b'];

if($dato != " "){
    $DATEF = ltrim($dato);
    $DATE = "'".$DATEF."'";
    
    if (isset($dato)) {
        $con="select * from clientes where nombre_Cliente like ".$DATE;
        $resultado = $consulta->query($con);
        if($resultado) {
            while($reg=mysqli_fetch_array($resultado))  {
    
                echo '<tr class="registro">
                    <td>'.$reg[0].'</td>'.
                    '<td>'.$reg[1].'</td>'.
                    '<td>'.$reg[2].'</td>'.
                    '<td>'.$reg[4].'</td>'.
                    '<td>'.$reg[5].'</td> </tr>';
            }
        }else {
            echo mysqli_error($consulta);
        }
        // echo $DATEF;    
        
    }
} else {
    $resultado = $consulta->query("SELECT * FROM clientes");
    while($reg=mysqli_fetch_array($resultado))  {
        echo '<tr class="registro">
        <td>'.$reg[0].'</td>'.
        '<td>'.$reg[1].'</td>'.
        '<td>'.$reg[2].'</td>'.
        '<td>'.$reg[4].'</td>'.
        '<td>'.$reg[5].'</td> </tr>';
    }
}
?>