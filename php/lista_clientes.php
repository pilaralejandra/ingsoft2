<?php
require 'conexion.php';
$conexion = conecta();

$consulta = mysqli_query($conexion, "SELECT * FROM clientes");
if (mysqli_num_rows($consulta) > 0)
{
    echo "
<p>"; while($row = mysqli_fetch_array($consulta, MYSQL_ASSOC)) {  echo " <table> <thead> <tr> <th>RFC</th> <th>NOMBRE</th> <th>DIRECCION</th> <th>TELEFONO</th></tr>"; echo "<tr>"; echo "<td>".$row['RFC']."</td>"; echo "<td>".$row['nombre']."</td>"; echo "<td>".$row['direccion']."</td>"; echo "<td>".$row['telefono'];echo "</tr></thead></table>"; } 
} else { 
echo " <p>Aún no hay registros en la base de datos</p>"; 
}
?>

