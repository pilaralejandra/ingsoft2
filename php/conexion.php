<?php


function conecta(){
//Definimos las variables de conexión.
$host_bd="localhost";
$user_bd="root";
$pass_bd="";
$base_bd="INVERSIONES_N";

//Creamos la conexión a la base de datos.
$conexion= mysqli_connect($host_bd,$user_bd,$pass_bd,$base_bd);

//Si no podemos conectar a la base de datos, mostramos el error por pantalla.
if (!$conexion) { 
	echo mysqli_connect_error(); 
}
	echo "Exito al conectarse a la base de datos";

/*
[code]
*/
	return $conexion;
}

?>