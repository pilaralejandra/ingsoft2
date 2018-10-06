<?php  


?>

 <div class="container pb-5">
	<div class="row">

        <form method="POST" action="php/agregar_clientes.php" class="col-sm-12 col-md-6 offset-md-3 p-4 ">
          <h2 class="tname">Datos del Cliente</h2>
            <div class="form-group">
              <label for="rfc">RFC</label>
              <input type="text" class="form-control" id="rfc" name="rfc" placeholder="RFC">
            </div>
            <div class="form-group">
              <label for="nombre">Nombre</label>
              <input type="text" class="form-control" id="rfc" name="nombre" placeholder="Nombre">
            </div>
            <div class="form-group">
              <label for="direccion">Direccion</label>
              <input type="text" class="form-control" id="direccion" name="direccion" placeholder="Direccion">
            </div>
            <div class="form-group">
              <label for="telefono">Telefono</label>
              <input type="tel" class="form-control" id="telefono" name="telefono" placeholder="Telefono">
            </div>
          <button type="submit" class="btn submit-button float-right" name="guardar" value="guardar">Guardar</button>
        </form>

      </div>
</div>
