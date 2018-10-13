<?php 
require 'conexion.php';
$conexion = conecta();

$rfcCliente = $_POST['rfcCliente'];
$fecha = $_POST['fecha'];
$dias = $_POST['dias'];
$importe = $_POST['importe'];
$categoria = $_POST['categoria'];



$consulta="INSERT INTO inversion (id_inversion, fecha_reg, dias, importe, nss_empleado,RFC_cliente, categoria)VALUES('$fecha', '$dias', '$importe','$rfcCliente','$categoria')";
if (mysqli_query($conexion, $consulta)) {
      echo "New record created successfully";
} else {
      echo "Error: " . $consulta . "<br>" . mysqli_error($conexion);
}
mysqli_close($conexion);
 ?>