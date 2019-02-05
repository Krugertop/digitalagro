<?php 

	include("assets/php/conexao.php");

	session_start();

	if((!isset ($_SESSION['email']) == true) and (!isset ($_SESSION['senha']) == true))
	{
	  unset($_SESSION['email']);
	  unset($_SESSION['senha']);
	  header('location:index.php');
	}

?>
<!doctype html>
<html>
	<head>
		
		<meta charset="utf-8">
		<title> Mentores </title>
		
		<!-- Icones do Google -->
		<link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
		<!--Materialize-->
		<link type="text/css" rel="stylesheet" href="assets/css/materialize.css"  media="screen,projection"/>
		<!-- CSS -->
		<link type="text/css" rel="stylesheet" href="assets/css/main.css"  media="screen,projection"/>
		<!-- Chat CSS -->
		<link type="text/css" rel="stylesheet" href="assets/css/chat.css"  media="screen,projection"/>
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
				<li><a href="mentores.php" class="white-text"><i class="material-icons white-text">assignment_ind</i> Mentores</a></li>
				<li><a href="breve.php" class="white-text"><i class="material-icons white-text">assignment</i> Meus Financiamentos </a</li>
				<li><a href="parceiros.php" class="white-text"><i class="material-icons white-text">group</i> Parceiros </a></li>
				<li><a href="breve.php" class="white-text"><i class="material-icons white-text">date_range</i> Calendários </a></li>
				<li><a href="configuracoes.php" class="white-text"><i class="material-icons white-text">settings</i> Configurações </a></li>
				<li><a href="landing/" class="white-text"><i class="material-icons white-text">announcement</i> Landing Page </a></li>
			</ul>
		<!-- Término Sidebar -->
		
		<!-- Começo Desenvolvimento -->
					
					
			<!-- Começo Primeiro e Segundo Card -->
				<div class="row">
					<div class="col s3"></div>
					<div class="col s4">
						<div class="card grey lighten-5">
							<div class="card-content white-text">
								<span class="card-title black-text"><img class="circle responsive-img" src="assets/img/avatar.png" width="50px" height="50px"><b> David James </b></span>
								<p class="black-text"> Cascavel <br>
								Celular: (45)99987-6334 </p>
							</div>
							<div class="card-action">
								<a href="mensagens.php"><i class="material-icons black-text">chat</i></a>
								<a class="black-text"> Chat ativo. </a>
							</div>
						</div>
					</div>
					<div class="col s4">
						<div class="card grey lighten-5">
							<div class="card-content white-text">
								<span class="card-title black-text"><img class="circle responsive-img" src="assets/img/avatar-1.png" width="50px" height="50px"><b> Valentin Salmon </b></span>
								<p class="black-text"> Cascavel <br>
								Celular: (45)99891-2291 </p>
							</div>
							<div class="card-action">
								<a href="mensagens.php"><i class="material-icons black-text">chat</i></a>
								<a class="black-text"> Chat ativo. </a>
							</div>
						</div>
					</div>
				</div>
			<!-- Término Primeiro e Segundo Card -->
			<!-- Começo Terceiro e Quarto Card -->
				<div class="row">
					<div class="col s3"></div>
					<div class="col s4">
						<div class="card grey lighten-5">
							<div class="card-content white-text">
								<span class="card-title black-text"><img class="circle responsive-img" src="assets/img/avatar-2.png" width="50px" height="50px"><b> Bessie Berry </b></span>
								<p class="black-text"> Ibema <br>
								Celular: (45)99998-1028 </p>
							</div>
							<div class="card-action">
								<a href="#erro" class="modal-trigger"><i class="material-icons black-text">chat</i></a>
							</div>
						</div>
					</div>
					<div class="col s4">
						<div class="card grey lighten-5">
							<div class="card-content white-text">
								<span class="card-title black-text"><img class="circle responsive-img" src="assets/img/avatar-3.png" width="50px" height="50px"><b> Gleb Kuznetsov </b></span>
								<p class="black-text"> Toledo <br>
								Celular: (45)99936-3006 </p>
							</div>
							<div class="card-action">
								<a href="#erro" class="modal-trigger"><i class="material-icons black-text">chat</i></a>
							</div>
						</div>
					</div>
				</div>
			<!-- Término Terceiro e Quarto Card -->
			<!-- Começo Quinto e Sexto Card -->
				<div class="row">
					<div class="col s3"></div>
					<div class="col s4">
						<div class="card grey lighten-5">
							<div class="card-content white-text">
								<span class="card-title black-text"><img class="circle responsive-img" src="assets/img/icon1.png" width="50px" height="50px"><b> Mark Schindler </b></span>
								<p class="black-text"> Santa Tereza <br>
								Celular: (45)99824-5628 </p>
							</div>
							<div class="card-action">
								<a href="#erro" class="modal-trigger"><i class="material-icons black-text">chat</i></a>
							</div>
						</div>
					</div>
					<div class="col s4">
						<div class="card grey lighten-5">
							<div class="card-content white-text">
								<span class="card-title black-text"><img class="circle responsive-img" src="assets/img/icon6.jpg" width="50px" height="50px"><b> Nick Herasimenka </b></span>
								<p class="black-text"> Cascavel <br>
								Celular: (45)99939-4117 </p>
							</div>
							<div class="card-action">
								<a href="#erro" class="modal-trigger"><i class="material-icons black-text">chat</i></a>
							</div>
						</div>
					</div>
				</div>
			<!-- Término Terceiro e Quarto Card -->
					
			<!-- Começo Modal Erro -->
				<div id="erro" class="modal">
					<div class="modal-content">
						<h3 class="fonteee"> Você não tem mensagens nesse chat! :( </h3>
					</div>
					<div class="modal-footer">
						<a href="#!" class="modal-close waves-effect waves-green btn-flat"> Fechar </a>
					</div>
				</div>
			<!-- Término Modal Erro -->	
			
			<!-- JQuery -->
			<script src="assets/js/jquery.js"></script>
			<!-- Materialize -->
			<script src="assets/js/materialize.js"></script>
					
			<script>
					
				$(document).ready(function(){
					$('.modal').modal();
				});
					
			</script>
	</body>
</html>