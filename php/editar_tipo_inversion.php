

<!DOCTYPE html>
<html>
<head>
  <title>EDITAR TIPO INVERSION</title>

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

            $consulta = "SELECT * FROM tipo_inversion WHERE id_tipo_inv='$id'";
            $resultado = $conexion->query($consulta);
            $row=$resultado->fetch_assoc();

            ?>

      

 <form class="col-sm-12 col-md-6 offset-md-3 p-4 " action="editar_proceso_tipo_inversion.php?id=<?php echo $row['id_tipo_inv']; ?>" method="POST" class="col-sm-12 col-md-6 offset-md-3 p-4">
          <h2 class="tname">Datos del Tipo de Inversion</h2>
            <div class="form-group">
              <label for="id">id</label>
              <input type="text" class="form-control" id="id" name="id_tipo_inv" placeholder="id" value="<?php echo $row['id_tipo_inv'];?>">
            </div>
            <div class="form-group">
              <label for="nombre">Categoria</label>
              <input type="text" class="form-control" id="categoria" name="categoria" placeholder="categoria" value="<?php echo $row['categoria'];?>">
            </div>
            <div class="form-group">
              <label for="direccion">Rendimiento</label>
              <input type="text" class="form-control" id="porcentaje" name="porcentaje" placeholder="porcentaje" value="<?php echo $row['porcentaje'];?>">
            </div>
            <div class="form-group">
              <label for="telefono">Tasa de Pago</label>
              <input type="tel" class="form-control" id="tasa_pago" name="tasa_pago" placeholder="tasa_pago" value="<?php echo $row['tasa_pago'];?>">
            
            <button type="submit" class="btn submit-button float-right" name="guardar" value="guardar">Guardar</button>
        </form>

      </div>
</div>
</body>
</html>