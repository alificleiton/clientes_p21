<?php

	date_default_timezone_set('America/Sao_Paulo');

	define('HOST', 'localhost');
	define('USUARIO', 'root');
	define('SENHA', '');
	define('BD', 'p21_clientes');

	$conn = mysqli_connect(HOST, USUARIO, SENHA, BD) or die('Não conectou');

	
?>