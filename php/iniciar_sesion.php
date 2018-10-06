<?php
require 'conexion.php';
$conexion = conecta();

$user = $_POST['user'];
$pass = $_POST['pass'];





$admin = "SELECT * FROM EMPLEADOS WHERE user = '$user' and pass = '$pass'and puesto = 'ADMIN'";
$ejecutivo = "SELECT * FROM EMPLEADOS WHERE user = '$user' and pass = '$pass'and puesto = 'EJECUTIVO'";

$resultado = mysqli_query($conexion, $admin);
$filas = mysqli_num_rows($resultado);

$res = mysqli_query($conexion, $ejecutivo);
$filasEjecutivo = mysqli_num_rows($res);

if($filas > 0 ){
    session_start();

    $_SESSION['user']="$user";
    
    header("Location: ../inicio.html");

    exit();
}else if ($filasEjecutivo > 0) {
	session_start();

    $_SESSION['user']="$user";
    
    header("Location: ../ejecutivo.html");
}else {
    echo "Error en la autenticacion... intente de nuevo <br><a href='../index.html'> regresar</a>";

}

?>
