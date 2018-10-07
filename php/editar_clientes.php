<!DOCTYPE html>
<html>
<head>
  <title>EDITAR CLIENTES</title>

   <link rel="stylesheet" href="../css/bootstrap.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.3.1/css/all.css" integrity="sha384-mzrmE5qonljUremFsqc01SB46JvROS7bZs3IO2EmfFsd15uHvIt+Y8vEf7N7fWAU" crossorigin="anonymous">
    <link rel="stylesheet" href="../estilos.css">

</head>
<body>
<div class="container pb-5">
  <div class="row">

            <?php

            require 'conexion.php';
            $conexion = conecta();

            $rfc=$_REQUEST['RFC'];

            $consulta = "SELECT RFC, nombre, direccion, telefono FROM clientes WHERE rfc='$rfc'";
            $resultado = $conexion->query($consulta);
            $row=$resultado->fetch_assoc();

            ?>

        <form method="POST" action="editar_proceso_cliente.php?RFC=<?php echo $row['RFC']; ?>" class="col-sm-12 col-md-6 offset-md-3 p-4 ">





          <h2 class="tname">Datos del Cliente</h2>
            <div class="form-group">
              <label for="rfc">RFC</label>
              <input type="text" class="form-control" id="rfc" name="rfc" placeholder="RFC" value="<?php echo $row['RFC'];?>">
            </div>
            <div class="form-group">
              <label for="nombre">Nombre</label>
              <input type="text" class="form-control" id="rfc" name="nombre" placeholder="Nombre" value="<?php echo $row['nombre'];?>">
            </div>
            <div class="form-group">
              <label for="direccion">Direccion</label>
              <input type="text" class="form-control" id="direccion" name="direccion" placeholder="Direccion" value="<?php echo $row['direccion'];?>">
            </div>
            <div class="form-group">
              <label for="telefono">Telefono</label>
              <input type="tel" class="form-control" id="telefono" name="telefono" placeholder="Telefono" value="<?php echo $row['telefono'];?>">
            </div>
          <button type="submit" class="btn submit-button float-right" name="guardar" value="guardar">Guardar</button>
        </form>

      </div>
</div>
</body>
</html>
