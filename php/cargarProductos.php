<?php
    include 'conexion.php';

    $query = $con;
    $resultado = $query->query("SELECT * FROM productos");

    while($reg=mysqli_fetch_array($resultado))  {
        echo '<tr>
                <td class="editable">'.$reg[0].'</td>'.
                '<td class="editable">'.$reg[1].'</td>'.
                '<td class="editable">'.$reg[2].'</td>'.
                '<td class="editable">'.$reg[3].'</td> </tr>';
    }

?>