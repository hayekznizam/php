<?php

$nome = "Vinícius";

function teste(){
	global $nome;
	echo $nome;
	echo "<br/>";
	
}

function teste2(){
	$nome = "João";
	echo $nome." agora no teste2";


}


teste();
teste2();

?>
