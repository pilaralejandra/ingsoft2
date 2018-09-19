<?php
require'conexion.php';
$conexion = consulta();

$consulta = mysqli_query($conexion, "SELECT * FROM EMPLEADOS");
if (mysqli_num_rows($consulta) > 0)
{
    echo "
<p>"; while($row = mysqli_fetch_array($consulta, MYSQL_ASSOC)) { echo "<tr>"; echo "<<td>".$row['cedula']."</td>"; echo "<td>".$row['nss']."</td>"; echo "<td>".$row['nombre']."</td>"; echo "<td>".$row['direccion']."</td>"; echo "<td>".$row['telefono']."</td> "echo "</tr>"; } echo " <table> <thead> <tr> <th>NSS</th> <th>Nombre</th> <th>DIRECCION</th> <th>TELEFONO</th> </tr> </thead> </table> 
} else { 
echo " <p>Aún no hay registros en la base de datos</p> 
}
?>