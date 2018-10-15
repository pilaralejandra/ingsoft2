<?php 
require 'conexion.php';
$conexion = conecta();

$id=$_REQUEST['id'];

$consulta="DELETE FROM inversion WHERE id_inversion='$id'";
if (mysqli_query($conexion, $consulta)) {
      header("Location: ../lista_inversion.php");
} else {
      echo "Error: " . $consulta . "<br>" . mysqli_error($conexion);
}
mysqli_close($conexion);
 ?>