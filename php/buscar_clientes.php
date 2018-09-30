<html>
<head>
    <link rel="stylesheet" href="css/bootstrap.css">
</head>

</html>
<?php
require 'conexion.php';
$conexion = conecta();

//echo "<link rel="stylesheet" href="estilos_clientes.css">";

$salida = "";
$query = "SELECT * FROM clientes ORDER BY nombre";

if(isset($_POST['consulta'])){
	$q = $conexion->real_escape_string($_POST['consulta']);
	$query = "SELECT RFC, nombre, direccion, telefono FROM clientes WHERE RFC LIKE '%".$q."%' OR nombre LIKE  '%".$q."%' OR direccion LIKE '%".$q."%' OR telefono LIKE  '%".$q."%'" ;
}

$resultado = $conexion->query($query);

if($resultado->num_rows > 0){
	$salida.="<table class='tabla_datos table'>
				<caption>Listado de Clientes</caption>
				<thead>
				<tr>
				<th>RFC</th>
				<th>NOMBRE</th>
				<th>DIRECCION</th>
				<th>TELÉFONO</th>
				</tr>
				</thead>
				<tbody>";

		while ($fila = $resultado->fetch_assoc()) {
			$salida.="<tr>
					  <td>".$fila['RFC']."</td>
					  <td>".$fila['nombre']."</td>
					  <td>".$fila['direccion']."</td>
					  <td>".$fila['telefono']."</td>
					  </tr>";
		}

	$salida.="</tbody></thead>";

} else {

	$salida.="No hay datos :(";

}

echo $salida;

$conexion->close()

?>
