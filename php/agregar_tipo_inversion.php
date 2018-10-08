<?php 
require 'conexion.php';
$conexion = conecta();

$id = $_POST['id'];
$categoria = $_POST['categoria'];
$porcentaje = $_POST['porcentaje'];
$tasa_pago = $_POST['tasa_pago'];


$consulta="INSERT INTO tipo_inversion (id_tipo_inv, categoria, porcentaje, tasa_pago)VALUES('$id','$categoria','$porcentaje','$tasa_pago')";
if (mysqli_query($conexion, $consulta)) {

      echo "insertado correctamente...";
} else {
      echo "Error: " . $consulta . "<br>" . mysqli_error($conexion);
}
mysqli_close($conexion);
 ?>