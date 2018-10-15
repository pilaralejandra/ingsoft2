<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>INVERSIONES</title>
    <link rel="stylesheet" href="css/bootstrap.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.3.1/css/all.css" integrity="sha384-mzrmE5qonljUremFsqc01SB46JvROS7bZs3IO2EmfFsd15uHvIt+Y8vEf7N7fWAU" crossorigin="anonymous">
    <link rel="stylesheet" href="estilos.css">
    <!-- <link rel="stylesheet" href="estilos_empleados.css"> -->
      <?php  require_once('php/iniciar_sesion.php');?>
  </head>

  <body>

    <header class="container">
      <div class="row">
        <h1 class="font-weight-bold text-left col-md-12 mt-5 title">INVERSIONES <i class="far fa-address-card icon-color"></i></h1>
        <?php include('navfixed.php');?>
    <?php

      $position=$_SESSION['SESSION_USUARIO'];
      $nss=$_SESSION['SESSION_ID'];
      if($position=='admin' || $position='ejecutivo') {
?> 
      </div>
    </header>

    <div class="container my-5">
      <nav class="menu nav nav-pills flex-column flex-sm-row">

        <a class="flex-md-fill text-sm-center nav-link col-md-4 active-color" href="inversion.php">Agregar Inversion <i class="fas fa-user-plus"></i></a> </li>
        <a class="flex-md-fill text-sm-center nav-link col-md-4 nav-act" href="lista_inversion.php">Lista de Inversiones <i class="far fa-list-alt"></i></a></li>
        <a class="flex-md-fill text-sm-center nav-link col-md-4 nav-act" href="inicio.php">Menú principal <i class="fab fa-pagelines icono"></i></a> </li>

      </nav>
    </div>

    <div class="container pb-5">
      <div class="row">
        <form class="col-sm-12 col-md-6 offset-md-3 p-4 " action="php/agregar_inversion.php" method="POST" class="col-sm-12 col-md-6 offset-md-3 p-4">
          <h2 class="tname">Datos de las Inversiones</h2>
            <div class="form-group">
              <label for="rfcCliente">RFC de Cliente</label>
              <input type="text" class="form-control" id="rfcCliente" name="rfcCliente" placeholder="RFC" required>
            </div>
            <div class="form-group">
              <label for="fecha">Fecha</label>
              <input type="date" class="form-control" name="fecha" id="fecha" name="fecha" value="<?php echo date('Y-m-d'); ?>" >
            </div>
            <div class="form-group">
              <label for="Plazo de inversion">Plazo de la inversion</label><br>
              <select class="form-control" name="dias">
                <option value="1">1</option>
                <option value="3">3</option>
                <option value="6">6</option>
                <option value="12">12</option>
            </select>
            </div>
            <div class="form-group">
              <label for="importe">importe</label>
              <input type="number" class="form-control" name="importe" min="1000" max="1000000" placeholder="$1,000.00" required>
            </div>
             <div class="form-group">
              <label for="categoria">categoria</label>
              <select class="form-control" name="categoria">
                <option value="Oro">Oro</option>
                <option value="Plata">Plata</option>
                <option value="Cobre">Cobre</option>
                <option value="Cetes">Cetes</option>
                <option value="Escrituras">Escrituras</option>
            </select>
            </div>
            <button type="submit" class="btn submit-button float-right" name="guardar" value="guardar">Guardar</button>
        </form>
      </div>
    </div>
    <?php
}
?>

  </body>
</html>

