<?php 
require 'conexion.php';
$conexion = conecta();

$RFC=$_REQUEST['RFC'];

$consulta="DELETE FROM clientes WHERE RFC='$RFC'";
if (mysqli_query($conexion, $consulta)) {
      header("Location: ../lista_cliente.html");
} else {
      echo "Error: " . $consulta . "<br>" . mysqli_error($conexion);
}
mysqli_close($conexion);
 ?>