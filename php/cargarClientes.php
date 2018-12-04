<?php
    include 'conexion.php';

    $query = $con;
    $resultado = $query->query("SELECT * FROM clientes");

    while($reg=mysqli_fetch_array($resultado))  {
        echo '<tr>
                <td>'.$reg[0].'</td>'.
                '<td class="editable">'.$reg[1].'</td>'.
                '<td class="editable">'.$reg[2].'</td>'.
                '<td class="editable">'.$reg[4].'</td>'.
                '<td class="editable">'.$reg[5]. '</td> </tr>';
    }

?>