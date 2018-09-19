<?php 
require 'conexion.php';
$conexion = conecta();

$rfc = $_POST['rfc'];
$nombre = $_POST['nombre'];
$direccion = $_POST['direccion'];
$telefono = $_POST['telefono'];



$consulta="INSERT INTO clientes (RFC, nombre, direccion, telefono)VALUES('$rfc', '$nombre', '$direccion','$telefono')";
if (mysqli_query($conexion, $consulta)) {
      echo "New record created successfully";
} else {
      echo "Error: " . $consulta . "<br>" . mysqli_error($conexion);
}
mysqli_close($conexion);
 ?>