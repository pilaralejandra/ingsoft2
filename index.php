<?php
session_start();

unset($_SESSION['SESSION_USUARIO']);
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
	

	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.3.1/css/all.css" integrity="sha384-mzrmE5qonljUremFsqc01SB46JvROS7bZs3IO2EmfFsd15uHvIt+Y8vEf7N7fWAU" crossorigin="anonymous">


	<style type="text/css">
		.borde{
			background-color: #009EA9;
			height: 100px;
		}

		.login{
			width: 30%;
			height: 50%;
			margin: auto;

		}

		.btn-outline-primary {
		    color: #007bff;
		    background-color: transparent;
		    background-image: none;
		    border-color: #007bff;
		    width: 100%;
		}

		.contenedor {
			border: .5px solid #2D1FC7;
			border-radius: 25px;
			padding: 20px 20px 20px 20px;
		}

		.col h1{
			color: gray;
			font-family: oswald;
		}
	</style>

</head>

<body>
<!-- ***************************inicio de index *********************-->

	<div class="container">
		<div class="row">
			<div class="col borde">
			
			</div>
		</div>
	</div>
	<br>
	<div class="contenedor login">
		<?php 
			if(isset($_SESSION['ERRMGS_ARR']) && is_array($_SESSION['ERRMGS_ARR']) && count($_SESSION['ERRMGS_ARR']) > 0){
				foreach ($_SESSION['ERRMGS_ARR'] as $msg) {
					# code...
					echo "<div style='color: red text-align: center;'>",$msg,"</div>";
				}
				unset($_SESSION['ERRMGS_ARR']);
			}
		?>
		<form action="php/iniciar_sesion.php" method="POST">
			  	<div class="form-group">
				  	<div class="row">
						<div class="col text-center">
						<h1>Ingreso a Inversiones</h1>
						</div>
					</div>
			    <input type="text" class="form-control" id="text" placeholder="user" name="user" required autocomplete="off">
			  </div>
			  <br>
			  <div class="form-group">
			  	<input type="password" class="form-control" id="pwd" placeholder="pass" name="pass" required>
			  </div>
			  <button type="submit" class="btn btn-outline-primary" name="iniciarSesion">ENTRAR</button>
		</form>
	</div>

<script src="js/jquery-3.3.1.slim.min.js"></script>
<script src="js/popper.min.js"></script>
<script src="js/bootstrap.min.js"></script>
</body>
</html>
