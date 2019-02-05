<?php 

	include("assets/php/conexao.php");

	session_start();

	if((!isset ($_SESSION['email']) == true) and (!isset ($_SESSION['senha']) == true))
	{
	  unset($_SESSION['email']);
	  unset($_SESSION['senha']);
	  header('location:index.php');
	}

	$query = sprintf("SELECT * FROM chat WHERE remetente = 'David'");
	$dados = mysqli_query($conn, $query) or die(mysqli_error());
	$linha = mysqli_fetch_assoc($dados);
	$total = mysqli_num_rows($dados);

	$query1 = sprintf("SELECT * FROM chat WHERE remetente = 'Valentin'");
	$dados1 = mysqli_query($conn, $query1) or die(mysqli_error());
	$linha1 = mysqli_fetch_assoc($dados1);
	$total1 = mysqli_num_rows($dados1);

?>
<!doctype html>
<html>
	<head>
		
		<meta charset="utf-8">
		<title> Mensagens </title>
		
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
								Celular: (45)99987-6334</p>
							</div>
							<div class="card-action">
								<a href="#modal1" class="modal-trigger"><i class="material-icons black-text">chat</i></a>
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
								<a href="#modal2" class="modal-trigger"><i class="material-icons black-text">chat</i></a>
								<a class="black-text"> Chat ativo. </a>
							</div>
						</div>
					</div>
				</div>
			<!-- Término Primeiro e Segundo Card -->
					
			<!-- Começo Modal David -->
				<div id="modal1" class="modal">
					<div class="modal-content">
						<div class="container">
							<img src="assets/img/avatar.png" alt="Avatar">
							<p> Oi Gabriel! Como vai sua plantação?</p>
							<span class="time-right"> 11:57 </span>
						</div>
						<?php
                        	if($total > 0) {
                            do {
                         ?>
                        <div class="container darker">
							<img src="assets/img/me.jpg" alt="Avatar" class="right">
							<p> <?=$linha['mensagem']?> </p>
							<span class="time-right"><?=$linha['hora']?></span>
						</div>
                        <?php

                            }while($linha = mysqli_fetch_assoc($dados));

                            }else{
                                            
                            }
									
                         ?>
						<form method="POST" action="mensagemd.php">
							<div class="input-field col s3">
								<input id="mensagem" type="text" class="validate" name="mensagem">
								<label for="mensagem"> Mensagem </label>
							</div>
						</div>
						<div class="modal-footer">
							<button class="btn waves-effect waves-light green darken-2 white-text" type="submit"> Enviar <i class="material-icons right">keyboard_tab</i></button>
							<button class="btn waves-effect waves-light green darken-2 white-text modal-close"> Fechar <i class="material-icons right">close</i></button>
						</div>
						</form>
				</div>
			<!-- Término Modal David -->
			<!-- Começo Modal Valentin -->
				<div id="modal2" class="modal">
					<div class="modal-content">
						<div class="container">
							<img src="assets/img/avatar-1.png" alt="Avatar">
							<p> Olá. Você conseguiu plantar os morangos? </p>
							<span class="time-right"> 12:19 </span>
						</div>
						
						<?php
                        	if($total1 > 0) {
                            do {
                         ?>
                        <div class="container darker">
							<img src="assets/img/me.jpg" alt="Avatar" class="right">
							<p> <?=$linha1['mensagem']?> </p>
							<span class="time-right"><?=$linha1['hora']?></span>
						</div>
                        <?php

                            }while($linha1 = mysqli_fetch_assoc($dados1));

                            }else{
                                            
                            }
									
                         ?>
						<form method="POST" action="mensagemv.php">
							<div class="input-field col s3">
								<input id="mensagem" type="text" class="validate" name="mensagem">
								<label for="mensagem"> Mensagem </label>
							</div>
						</div>
						<div class="modal-footer">
							<button class="btn waves-effect waves-light green darken-2 white-text" type="submit"> Enviar <i class="material-icons right">keyboard_tab</i></button>
							<button class="btn waves-effect waves-light green darken-2 white-text modal-close"> Fechar <i class="material-icons right">close</i></button>
						</div>
						</form>
				</div>
			<!-- Término Modal Valentin -->					
			
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