<?php
session_start();

unset($_SESSION['SESSION_USUARIO']);
unset($_SESSION['SESSION_ID']);
?>
<!DOCTYPE html>
<html>
<head>
	<title>LOGIN</title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<meta http-equiv="x-ua-compatible" content="ie-edge">
	<link rel="stylesheet" href="css/bootstrap.css">
	<link rel="stylesheet" href="css/bootstrap.min.css">
	<link rel="stylesheet" href="js/bootstrap.min.js">
	<link rel="stylesheet" href="js/jquery.min.js">
	<link rel="stylesheet" href="estilos.css">


	<link rel="stylesheet" href="css/vendor/fontawesome/css/all.css">

</head>

<body>
<!-- ***************************inicio de index *********************-->

	<div class="container-fluid bg-img"></div>

	<div class="container pt-5">
		<h1 class="text-center pb-5">Ingreso a Inversiones <i class="fab fa-pagelines icono"></i></h1>
		<div class="contenedor row login">
			<?php
				if(isset($_SESSION['ERRMGS_ARR']) && is_array($_SESSION['ERRMGS_ARR']) && count($_SESSION['ERRMGS_ARR']) > 0){
					foreach ($_SESSION['ERRMGS_ARR'] as $msg) {
						# code...
						echo "<div style='color: red text-align: center;'>",$msg,"</div>";
					}
					unset($_SESSION['ERRMGS_ARR']);
				}
			?>
			<form action="php/iniciar_sesion.php" method="POST" class="col-sm-12 col-md-6 offset-md-3 p-4">
				<h2 class="tname">Iniciar sesión</h2>
				<div class="form-group">
					<label for="text">Username</label>
					<input type="text" class="form-control" id="text" placeholder="username" name="user" required autocomplete="off">
				</div>
			  <div class="form-group">
					<label for="text">Password</label>
			  	<input type="password" class="form-control" id="pwd" placeholder="password" name="pass" required>
			  </div>
				<button type="submit" class="btn submit-button float-right" name="iniciarSesion">ENTRAR</button>
			</form>
		</div>
	</div>

<script src="js/jquery-3.3.1.slim.min.js"></script>
<script src="js/popper.min.js"></script>
<script src="js/bootstrap.min.js"></script>
</body>
</html>
