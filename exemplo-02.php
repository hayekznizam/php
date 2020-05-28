<?php
 	$anoNascimento = 1999;
 	$nomeCompleto = "";
 	// comentario simples de linha, exemplo: na linha de baixo temos uma variavel com numero no nome
 	$nome1 = "João";
 	$nome_1 = "Maria";
 	//Adicionando comentario de bloco
 	/* É igual no c, ou c++*/
 	// essa variavel aqui na frentes nao pode ser usado é restrito $this 
 	echo $nome1;

 	echo "<br/>"; //pulando linha

 	//unset($nome1); //limpando a variavel na memoria
	//is set, se ela existe, se nome1 estiver definido escreva nom1
 	if(isset($nome1)){ 
 		echo $nome1;
 	}
 	
 	//Concatenação

 	$sobrenome = "Oliveira";

 	$nomeCompleto = $nome1 ." " . $sobrenome;
 	echo "<br/>";
 	echo $nomeCompleto;



?>