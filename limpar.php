<?php

	include("assets/php/conexao.php");

	$sql = "DELETE FROM chat WHERE id != '1';";

	if(mysqli_query($conn, $sql)){
		header("location:configuracoes.php");
	} else{
		header("location:configuracoes.php");
	}
	

?>