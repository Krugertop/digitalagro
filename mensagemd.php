<?php

	include("assets/php/conexao.php");

	date_default_timezone_set('America/Sao_Paulo');
	$mensagem = $_POST['mensagem'];
	$hora = date('H:i');

	if($mensagem <> ""){
		$sql = "INSERT INTO chat (remetente, mensagem, hora) VALUES ('David', '$mensagem', '$hora');";

		if(mysqli_query($conn, $sql)){
			header("location:mensagens.php");
		} else{
			header("location:mensagens.php");
		}
	} else{
		header("location:mensagens.php");
	}
	

?>