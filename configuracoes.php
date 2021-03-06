<?php 

	include("assets/php/conexao.php");

	session_start();

	if((!isset ($_SESSION['email']) == true) and (!isset ($_SESSION['senha']) == true))
	{
	  unset($_SESSION['email']);
	  unset($_SESSION['senha']);
	  header('location:index.php');
	}

	$email = $_SESSION['email'];

	$query = sprintf("SELECT * FROM admin WHERE email = '$email'");
	$dados = mysqli_query($conn, $query) or die(mysqli_error());
	$linha = mysqli_fetch_assoc($dados);
	$total = mysqli_num_rows($dados);

?>
<!doctype html>
<html>
	<head>
		
		<meta charset="utf-8">
		<title> Configurações </title>
		
		<!-- Icones do Google -->
		<link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
		<!--Materialize-->
		<link type="text/css" rel="stylesheet" href="assets/css/materialize.css"  media="screen,projection"/>
		<!-- CSS -->
		<link type="text/css" rel="stylesheet" href="assets/css/main.css"  media="screen,projection"/>
		<!-- Optimização para Mobile -->
		<meta name="viewport" content="width=device-width, initial-scale=1.0"/>
		<!-- Ícone do Site -->
		<link rel="shortcut icon" href="assets/img/favicon.png" type="image/x-icon" />
		
	</head>

	<body>
		
		<!-- Começo Navbar -->
			<header>
				<nav>
					<div class="nav-wrapper green darken-3">
						<div class="row">
							<div class="col s10"></div>
							<div class="col s2">
								<a href="index.php" class="show-on-medium-and-up white-text"><?=$_SESSION['nome']?></a>
							</div>
						</div>
					</div>
				</nav>
			</header>
		<!-- Término Navbar

		<!-- Começo Sidebar	 -->
			<ul id="sidenav-1" class="sidenav sidenav-fixed green darken-3">
				<li><i class="material-icons"></i></li>
				<li><a href="dashboard.php" class="white-text"><img src="assets/img/logobranca.png"></a></li>
				<li><i class="material-icons"></i></li>
				<li><a href="dashboard.php" class="white-text"><i class="material-icons white-text">home</i> Inicio</a></li>
				<li><a href="cursos.php" class="white-text"><i class="material-icons white-text">assessment</i> Cursos</a></li>
				<li><a href="mensagens.php" class="white-text"><i class="material-icons white-text">email</i> Mensagens</a></li>
				<li><a href="mentores.php" class="white-text"><i class="material-icons white-text">assignment_ind</i> Mentores </a></li>
				<li><a href="breve.php" class="white-text"><i class="material-icons white-text">assignment</i> Meus Financiamentos </a</li>
				<li><a href="parceiros.php" class="white-text"><i class="material-icons white-text">group</i> Parceiros </a></li>
				<li><a href="breve.php" class="white-text"><i class="material-icons white-text">date_range</i> Calendários </a></li>
				<li><a href="configuracoes.php" class="white-text"><i class="material-icons white-text">settings</i> Configurações </a></li>
				<li><a href="landing/" class="white-text"><i class="material-icons white-text">announcement</i> Landing Page </a></li>
			</ul>
		<!-- Término Sidebar -->
		
		<!-- Começo Desenvolvimento -->
					
			<div class="row">
					
				<div class="col s3"></div>
				<div class="col s9">
				
					<a href="limpar.php"><div class="card grey lighten-5">
						<div class="card-content white-text">
							<span class="card-title black-text"><b> Limpar Minhas Mensagens </b></span>
							<p class="black-text"> Limpar Mensagens do chat do David e Valentin </p>
						</div>
					</div></a>
				
				</div>
					
			</div>
					
			<div class="row">
					
				<div class="col s3"></div>
				<div class="col s9">
				
					<div class="card grey lighten-5">
						<div class="card-content white-text">
							<span class="card-title black-text"><b> Email </b></span>
							<p class="black-text"> <?=$linha['email']?></p>
						</div>
					</div>
				
				</div>
					
			</div>
					
			<div class="row">
					
				<div class="col s3"></div>
				<div class="col s9">
				
					<div class="card grey lighten-5">
						<div class="card-content white-text">
							<span class="card-title black-text"><b> Nome </b></span>
							<p class="black-text"> <?=$linha['nome']?></p>
						</div>
					</div>
				
				</div>
					
			</div>
					
			<div class="row">
					
				<div class="col s3"></div>
				<div class="col s9">
				
					<div class="card grey lighten-5">
						<div class="card-content white-text">
							<span class="card-title black-text"><b> Telefone </b></span>
							<p class="black-text"> <?=$linha['telefone']?></p>
						</div>
					</div>
				
				</div>
					
			</div>
					
			

	</body>
</html>