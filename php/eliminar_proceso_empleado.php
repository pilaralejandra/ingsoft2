<?php 
require 'conexion.php';
$conexion = conecta();

$nss=$_REQUEST['nss'];

$consulta="DELETE FROM empleados WHERE nss='$nss'";
if (mysqli_query($conexion, $consulta)) {
      header("Location: ../lista_empleados.html");
} else {
      echo "Error: " . $consulta . "<br>" . mysqli_error($conexion);
}
mysqli_close($conexion);
 ?>