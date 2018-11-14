<?php
    include 'conexion.php';

    $query = conexion();
    $resultado = $query->query("SELECT * FROM membresias");

    while($reg=mysqli_fetch_array($resultado))  {
        echo '<tr class="registro">
                <td>'.$reg[0].'</td>'.
                '<td class="editable">'.$reg[1].'</td>'.
                '<td class="editable">'.$reg[2].'</td>'.
                '<td class="editable">'.$reg[3].'</td> </tr>';
        echo mysqli_error($query);
    }

?>
