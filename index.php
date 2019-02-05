<?php

	session_start();
	session_destroy();
	session_unset();

?>
<!doctype html>
<html>
	<head>
		
		<meta charset="utf-8">
		<title> DigitalAGRO </title>
		
      	<!-- Icones do Google -->
		<link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
		<!--Materialize-->
		<link type="text/css" rel="stylesheet" href="assets/css/materialize.css"  media="screen,projection"/>
		<!-- Optimização para Mobile -->
		<meta name="viewport" content="width=device-width, initial-scale=1.0"/>
		<!-- CSS -->
		<link type="text/css" rel="stylesheet" href="assets/css/login.css"  media="screen,projection"/>
		<!-- Ícone do Site -->
		<link rel="shortcut icon" href="assets/img/favicon.png" type="image/x-icon" />
		
	</head>

	<body>
		
		<!-- Começo do Espaço -->
			<div class="row"></div>
			<div class="row"></div>
		<!-- Término do Espaço -->

		<!-- Começo da Tela de Login -->
		
			<form method="POST" action="assets/php/auth.php" name="login">
				
				<div class="row">

					<div class="col s9"></div>

					<div class="col s3">

						<img src="assets/img/logo.png" width="250px" height="200px">

					</div>

				</div>

				<div class="row">

					<div class="col s8"></div>

					<div class="col s4">

						<div class="texto"><h5> Faça login com os seus dados </h5></div>

					</div>


				</div>

				<div class="row">

					<div class="col s9"></div>

					<div class="input-field col s2">
					  <i class="material-icons prefix">email</i>
					  <input id="email" type="email" class="validate" name="email" required>
					  <label for="email"> Email </label>
					</div>

				</div>

				<div class="row">

					<div class="col s9"></div>

					<div class="input-field col s2">
					  <i class="material-icons prefix">lock</i>
					  <input id="senha" type="password" class="validate" name="senha" required>
					  <label for="senha"> Senha </label>
					</div>

				</div>

				<div class="row">

					<div class="col s9"></div>

					<div class="col s2">

						<center><button class="btn waves-effect waves-light green darken-2 white-text" type="submit"> Entrar <i class="material-icons right">check</i></button></center>

					</div>

				</div>
				
			</form>
		
		<!-- Término da Tela de Login -->
		
		
		<!-- JQuery -->
		<script src="assets/js/jquery.js"></script>
		<!-- Materialize -->
		<script src="assets/js/materialize.js"></script>
		
		<script>
		
		
  $(document).ready(function() {
    M.updateTextFields();
  });
		
		</script>
		
	</body>
</html>