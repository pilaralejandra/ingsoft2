<?php
require 'conexion.php';
$conexion = conecta();

$user = $_POST['user'];
$pass = $_POST['pass'];

//conexion a la base de datos
/*$host_db = "localhost";
$user_db = "id2607037_admin";
$pass_db = "123456";
$db_name = "id2607037_universidad";*/


$consulta = "SELECT * FROM EMPLEADOS WHERE user = '$user' and pass = '$pass'";
$resultado = mysqli_query($conexion, $consulta);
$filas = mysqli_num_rows($resultado);

if($filas > 0){
    echo $filas;
    header("Location: ../inicio.html");
}else{
    echo "Error en la autenticacion... intente de nuevo <a href='index.html'> regresar</a>";
    
}

?>