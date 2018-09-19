<?php 
require 'conexion.php';
$conexion = conecta();

$nss = $_POST['nss'];
$nombre = $_POST['nombre'];
$direccion = $_POST['direccion'];
$telefono = $_POST['telefono'];
$user = $_POST['user'];
$pass = $_POST['pass'];


$consulta="INSERT INTO EMPLEADOS (nss, nombre, direccion, telefono, user, pass)VALUES('$nss', '$nombre', '$direccion','$telefono','$user', '$pass')";
if (mysqli_query($conexion, $consulta)) {
      echo "New record created successfully";
} else {
      echo "Error: " . $consulta . "<br>" . mysqli_error($conexion);
}
mysqli_close($conexion);
 ?>