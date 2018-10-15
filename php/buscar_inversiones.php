<html>
<head>
    <link rel="stylesheet" href="css/bootstrap.css">

</head>

</html>
<?php
require 'conexion.php';
$conexion = conecta();

$salida = "";
$query = "SELECT * FROM inversion ORDER BY id_inversion";

if(isset($_POST['consulta'])){
	$q = $conexion->real_escape_string($_POST['consulta']);
	$query = "SELECT id_inversion, fecha_reg, dias, importe, nss_empleado, RFC_cliente, categoria FROM inversion WHERE fecha_reg LIKE '%".$q."%' OR dias LIKE  '%".$q."%' OR importe LIKE '%".$q."%' OR nss_empleado LIKE  '%".$q."%' OR RFC_cliente LIKE  '%".$q."%' OR categoria LIKE  '%".$q."%'" ;
}

$resultado = $conexion->query($query);

if($resultado->num_rows > 0){
	$salida.="<table class='tabla_datos table'>
				<caption align=top>Listado de Inversion</caption>
				<thead>
				<tr>
				<th>id</th>
				<th>fecha registro</th>
				<th>periodo</th>
				<th>importe</th>
				<th>id empleado</th>
				<th>rfc cliente</th>
				<th>categoria</th>
				<th>acciones</th>
				</tr>
				</thead>
				<tbody>";

		while ($fila = $resultado->fetch_assoc()) {
			$salida.="<tr>
					  <td>".$fila['id_inversion']."</td>
					  <td>".$fila['fecha_reg']."</td>
					  <td>".$fila['dias']."</td>
					  <td>".$fila['importe']."</td>
					  <td>".$fila['nss_empleado']."</td>
					  <td>".$fila['RFC_cliente']."</td>
					  <td>".$fila['categoria']."</td>
					  <td>"."<i class='fas fa-pen-alt'>"."<a href='php/editar_inversion.php?id=".$fila['id_inversion']."'>editar</a></i> <i class='fas fa-trash'>"."<a href='php/eliminar_proceso_inversion.php?id=".$fila['id_inversion']."'>eliminar</a></i>"."</td>
					  </tr>";
		}

	$salida.="</tbody></thead>";

} else {

	$salida.="No hay datos :(";

}

echo $salida;

$conexion->close()

?>
