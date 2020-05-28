<?php
	//Variáveis pré defiinidas

	$nome = $_GET["a"];
	var_dump($nome);
	echo $nome;
	//convertendo o tipo da variavel para int
	$nome = (int) $_GET["a"];
	var_dump($nome);
	echo $nome;
	///
	//Pegando ip do usuario
	$ip = $_SERVER["REMOTE_ADDR"];
	echo $ip;
	
	$ip = $_SERVER["SCRIPT_NAME"];
	echo $ip;
	



?>
