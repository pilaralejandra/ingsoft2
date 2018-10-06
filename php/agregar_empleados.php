<?php 
require 'conexion.php';
$conexion = conecta();

$nss = $_POST['nss'];
$nombre = $_POST['nombre'];
$direccion = $_POST['direccion'];
$telefono = $_POST['telefono'];
$puesto = $_POST['puesto'];
$user = $_POST['user'];
$pass = $_POST['pass'];


$consulta="INSERT INTO EMPLEADOS (nss, nombre, direccion, telefono, puesto, user, pass)VALUES('$nss','$nombre','$direccion','$telefono','$puesto', '$user', '$pass')";
if (mysqli_query($conexion, $consulta)) {

      echo "insertado correctamente...";
} else {
      echo "Error: " . $consulta . "<br>" . mysqli_error($conexion);
}
mysqli_close($conexion);
 ?>