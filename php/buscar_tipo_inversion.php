<html>
<head>
    <link rel="stylesheet" href="css/bootstrap.css">

</head>

</html>
<?php
require 'conexion.php';
$conexion = conecta();

$salida = "";
$query = "SELECT * FROM tipo_inversion ORDER BY id_tipo_inv";

if(isset($_POST['consulta'])){
	$q = $conexion->real_escape_string($_POST['consulta']);
	$query = "SELECT * FROM tipo_inversion WHERE id_tipo_inv LIKE '%".$q."%' OR categoria LIKE  '%".$q."%' OR porcentaje LIKE '%".$q."%' OR tasa_pago LIKE  '%".$q."%'" ;
}

$resultado = $conexion->query($query);

if($resultado->num_rows > 0){
	$salida.="<table class='tabla_datos table'>
				<caption align=top>Listado de Tipo de Inversion</caption>
				<thead>
				<tr>
				<th>id</th>
				<th>categoria</th>
				<th>rendimiento</th>
				<th>tasa de pago</th>
				<th>acciones</th>
				</tr>
				</thead>
				<tbody>";

		while ($fila = $resultado->fetch_assoc()) {
			$salida.="<tr>
					  <td>".$fila['id_tipo_inv']."</td>
					  <td>".$fila['categoria']."</td>
					  <td>".$fila['porcentaje']."</td>
					  <td>".$fila['tasa_pago']."</td>
					  <td>"."<i class='fas fa-pen-alt'>"."<a href='php/editar_tipo_inversion.php?id=".$fila['id_tipo_inv']."'>editar</a></i> <i class='fas fa-trash'>"."<a href='php/eliminar_proceso_tipo_inversion.php?id=".$fila['id_tipo_inv']."'>eliminar</a></i>"."</td>
					  </tr>";
		}

	$salida.="</tbody></thead>";

} else {

	$salida.="No hay datos :(";

}

echo $salida;

$conexion->close()

?>
