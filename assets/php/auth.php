<?php 
	include("conexao.php");

	session_start();

	$email = $_POST['email'];
	$senha = $_POST['senha'];

	$sql = "SELECT * FROM admin WHERE email = '$email' AND senha = '$senha';";

	$result = mysqli_query($conn, $sql);

	if(mysqli_num_rows($result)>0){
		
		$dados = mysqli_query($conn, $sql) or die(mysqli_error());
		$linha = mysqli_fetch_assoc($dados);
		$total = mysqli_num_rows($dados);
		
		$_SESSION['email'] = $email;
		$_SESSION['senha'] = $senha;
		$_SESSION['nome'] = $linha['nome'];
		$_SESSION['telefone'] = $linha['telefone'];
		header('location:../../dashboard.php');
		
	}else{
		
		unset ($_SESSION['email']);
		unset ($_SESSION['senha']);
		header('location:../../index.php');
		
	 }
?>