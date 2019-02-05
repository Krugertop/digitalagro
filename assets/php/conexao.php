<?php

	$server = "172.16.2.219";
	$usuario = "any";
	$senha = "123";
	$database = "digitalagro";

	$conn = new mysqli($server, $usuario, $senha, $database) or die (mysqli_error($conn));

?>