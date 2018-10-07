<html>
<head>
    <link rel="stylesheet" href="css/bootstrap.css">
</head>

</html>
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
	$salida.="<table class='tabla_datos table'>
				<caption>Listado de Empleados</caption>
				<thead>
				<tr>
				<th>nss</th>
				<th>nombre</th>
				<th>direccion</th>
				<th>telefono</th>
				<th>user</th>
				<th>pass</th>
        <th>acciones</th>
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
            <td>"."<i class='fas fa-pen-alt'><a href='#'>editar</a></i> <i class='fas fa-trash'> <a href='#'>eliminar</a></i>"."</td>
					  </tr>";
		}

	$salida.="</tbody></thead>";

} else {

	$salida.="No hay datos :(";

}

echo $salida;

$conexion->close()

?>
