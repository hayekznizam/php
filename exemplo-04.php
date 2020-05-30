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
	//pegando o nome do arquivo
	$ip = $_SERVER["SCRIPT_NAME"];
	echo $ip;
	echo "<br/>";

	//uri é uma parte da url
	



?>
