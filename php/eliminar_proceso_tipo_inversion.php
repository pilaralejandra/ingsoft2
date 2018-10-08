<?php 
require 'conexion.php';
$conexion = conecta();

$id=$_REQUEST['id'];

$consulta="DELETE FROM tipo_inversion WHERE id_tipo_inv='$id'";
if (mysqli_query($conexion, $consulta)) {
      header("Location: ../lista_tipo_inversion.html");
} else {
      echo "Error: " . $consulta . "<br>" . mysqli_error($conexion);
}
mysqli_close($conexion);
 ?>