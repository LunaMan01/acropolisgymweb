<?php
    include 'conexion.php';

    $query = $con;
    $resultado = $query->query("SELECT * FROM vista_membresias");

    while($reg=mysqli_fetch_array($resultado))  {
        echo '<tr class="registro">
                <td>'.$reg[0].'</td>'.
                '<td class="editable">'.$reg[1].'</td>'.
                '<td class="editable fecha-inicio-td">'.$reg[2].'</td>'.
                '<td class="editable fecha-fin-td">'.$reg[3].'</td> </tr>';
        echo mysqli_error($query);
    }

?>
