<?php 
require 'conexion.php';
$conexion = conecta();

$salida = "";
$query = "SELECT * FROM empleados ORDER BY nombre";

if(isset($_POST['consulta'])){
	$q = $conexion->real_escape_string($_POST['consulta']);
	$query = "SELECT nss, nombre, direccion, telefono, user, pass FROM empleados WHERE nombre LIKE '%".$q."%' OR nss LIKE  '%".$q."%' OR direccion LIKE '%".$q."%' OR telefono LIKE  '%".$q."%'" ;
}

$resultado = $conexion->query($query);

if($resultado->num_rows > 0){
	$salida.="<table class='tabla_datos'>
				<thead>
				<tr>
				<td>nss</td>
				<td>nombre</td>
				<td>direccion</td>
				<td>telefono</td>
				<td>user</td>
				<td>pass</td>
				</tr>
				</thead>
				<tbody>";

		while ($fila = $resultado->fetch_assoc()) {
			$salida.="<tr>
					  <td>".$fila['nss']."</td>
					  <td>".$fila['nombre']."</td>
					  <td>".$fila['direccion']."</td>
					  <td>".$fila['telefono']."</td>
					  <td>".$fila['user']."</td>
					  <td>".$fila['pass']."</td>
					  </tr>";
		}

	$salida.="</tbody></thead>";

} else {

	$salida.="No hay datos :(";

}

echo $salida;

$conexion->close()

?>
