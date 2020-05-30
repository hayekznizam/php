<?php
	//Variáveis pré defiinidas ou Arrays Super Globais

	$nome = $_GET["a"];
	var_dump($nome);
	echo $nome;
	echo "<br/>";
	//convertendo o tipo da variavel para int
	$nome = (int) $_GET["a"];
	var_dump($nome);
	echo $nome;
	echo "<br/>";
	///
	//Pegando ip do usuario
	$ip = $_SERVER["REMOTE_ADDR"];
	echo $ip;
	echo "<br/>";

	$ip = $_SERVER["SCRIPT_NAME"];
	echo $ip;
	echo "<br/>";
	



?>
