<?php 
require 'conexion.php';
$conexion = conecta();

$id=$_REQUEST['id'];

$fecha = $_POST['fecha'];
$dias = $_POST['periodo'];
$importe = $_POST['importe'];
$nss_empleado = $_POST['nss_empleado'];
$rfc_Cliente = $_POST['rfc_Cliente'];
$categoria = $_POST['categoria'];




$consulta="UPDATE inversion SET fecha_reg='$fecha', dias='$dias', importe='$importe', nss_empleado='$nss_empleado', rfc_Cliente='$rfc_Cliente', categoria='$categoria' WHERE id_inversion='$id'";
if (mysqli_query($conexion, $consulta)) {
      header("Location: ../lista_inversion.php");
} else {
      echo "Error: " . $consulta . "<br>" . mysqli_error($conexion);
}
mysqli_close($conexion);
 ?>