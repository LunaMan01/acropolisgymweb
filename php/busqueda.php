<?php
$con = new mysqli("localhost", "root", "", "acropolisgym");
if ($con->connect_errno) {
    echo "Fallo al conectar MySQL";
}
$cad = $_POST['b'];
if (isset($cad)) {
    $cad = $cad . "%";
    $resultado = $con->query("SELECT * from Clientes WHERE nombre_Cliente like '$cad'");

?>
<!-- Encabezado de la tabla -->
<table class= "tabla">
    <tr>
        <td>NIP Cliente</td>
        <td>Nombre Cliente</td>
        <td>Apellido Paterno</td>
        <td>Edad</td>
        <td>Genero</td>
    </tr>

<?php
    // Buscar en los arreglos
    while($reg=mysqli_fetch_array($resultado))  {
        echo '<tr>
                <td>'.$reg[0].'</td>'.
                '<td>'.$reg[1].'</td>'.
                '<td>'.$reg[2].'</td>'. 
                '<td>'.$reg[4].'</td>'. 
                '<td>'.$reg[5].'</td> </tr>';
    }
} else {
    echo "No encontro nada";
}
?>
</table>