

<!DOCTYPE html>
<html>
<head>
  <title>EDITAR INVERSION</title>

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

            $id=$_REQUEST['id'];

            $consulta = "SELECT * FROM inversion WHERE id_inversion='$id'";
            $resultado = $conexion->query($consulta);
            $row=$resultado->fetch_assoc();

            ?>

      

 <form class="col-sm-12 col-md-6 offset-md-3 p-4 " action="editar_proceso_inversion.php?id=<?php echo $row['id_inversion']; ?>" method="POST" class="col-sm-12 col-md-6 offset-md-3 p-4">
          <h2 class="tname">Datos de la Inversion</h2>
            <div class="form-group">
              <label for="nss">Fecha</label>
              <input type="text" class="form-control" id="fecha" name="fecha" placeholder="fecha" value="<?php echo $row['fecha_reg'];?>">
            </div>
            <div class="form-group">
              <label for="nombre">Periodo</label>
              <input type="text" class="form-control" id="periodo" name="periodo" placeholder="periodo" value="<?php echo $row['dias'];?>">
            </div>
            <div class="form-group">
              <label for="direccion">Importe</label>
              <input type="text" class="form-control" id="importe" name="importe" placeholder="importe" value="<?php echo $row['importe'];?>">
            </div>
            <div class="form-group">
              <label for="telefono">id Empleado</label>
              <input type="tel" class="form-control" id="nss_empleado" name="nss_empleado" placeholder="nss_empleado" value="<?php echo $row['nss_empleado'];?>">
            </div>
             <div class="form-group">
              <label for="puesto">RFC Cliente</label>
              <input type="tel" class="form-control" id="rfc_Cliente" name="rfc_Cliente" placeholder="rfc_Cliente" value="<?php echo $row['RFC_cliente'];?>">
            </div>
            <div class="form-group">
              <label for="user">Categoria</label>
              <input type="tel" class="form-control" id="categoria" name="categoria" placeholder="categoria" value="<?php echo $row['categoria'];?>">
            </div>
        
            <button type="submit" class="btn submit-button float-right" name="guardar" value="guardar">Guardar</button>
        </form>

      </div>
</div>
</body>
</html>