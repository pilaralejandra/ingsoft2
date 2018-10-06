

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

            $nss=$_REQUEST['nss'];

            $consulta = "SELECT * FROM empleados WHERE nss='$nss'";
            $resultado = $conexion->query($consulta);
            $row=$resultado->fetch_assoc();

            ?>

      

 <form class="col-sm-12 col-md-6 offset-md-3 p-4 " action="editar_proceso_empleado.php?nss=<?php echo $row['nss']; ?>" method="POST" class="col-sm-12 col-md-6 offset-md-3 p-4">
          <h2 class="tname">Datos del Empleado</h2>
            <div class="form-group">
              <label for="nss">NSS</label>
              <input type="text" class="form-control" id="nss" name="nss" placeholder="NSS" value="<?php echo $row['nss'];?>">
            </div>
            <div class="form-group">
              <label for="nombre">Nombre</label>
              <input type="text" class="form-control" id="nombre" name="nombre" placeholder="Nombre" value="<?php echo $row['nombre'];?>">
            </div>
            <div class="form-group">
              <label for="direccion">Dirección</label>
              <input type="text" class="form-control" id="direccion" name="direccion" placeholder="Dirección" value="<?php echo $row['direccion'];?>">
            </div>
            <div class="form-group">
              <label for="telefono">Teléfono</label>
              <input type="tel" class="form-control" id="telefono" name="telefono" placeholder="Teléfono" value="<?php echo $row['telefono'];?>">
            </div>
             <div class="form-group">
              <label for="puesto">puesto</label>
              <input type="tel" class="form-control" id="puesto" name="puesto" placeholder="puesto" value="<?php echo $row['puesto'];?>">
            </div>
            <div class="form-group">
              <label for="user">User</label>
              <input type="tel" class="form-control" id="user" name="user" placeholder="User" value="<?php echo $row['user'];?>">
            </div>
            <div class="form-group">
              <label for="pass">Password</label>
              <input type="password" class="form-control" id="pass" name="pass" placeholder="Password" value="<?php echo $row['pass'];?>">
            </div>
            <button type="submit" class="btn submit-button float-right" name="guardar" value="guardar">Guardar</button>
        </form>

      </div>
</div>
</body>
</html>