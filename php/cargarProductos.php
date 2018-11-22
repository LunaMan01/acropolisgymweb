<?php
    include 'conexion.php';

    $query = $con;
    $resultado = $query->query("SELECT * FROM productos");

    while($reg=mysqli_fetch_array($resultado))  {
        echo '<tr>
                <td>'.$reg[0].'</td>'.
                '<td>'.$reg[1].'</td>'.
                '<td>'.$reg[2].'</td>'.
                '<td>'.$reg[3].'</td> </tr>';
    }

?>