<?php

//Tipos de Dados ->Basicos
$nome = "Hcode";
$site = 'www.google.com.br';

$ano = 1999;
$salario = 5500.99;

$bloqueado = false;
/////////////////////////////////////////////
//Tipos de Dados -> Compostos e Objetos

$frutas = array ("abacaxi","laranja","manga");

echo $frutas[2];
echo "<br/>";
echo $frutas[0];

//new, significa que orietancao a objetos esta sendo utilizado
$nascimento = new DateTime(); //vai pegar a data de hoje
echo "<br/>";
var_dump($nascimento);
////////////////////////////////////////////
//Tipos de Dados -> Especiais
//Resources
$arquivo = fopen("exemplo-03.php","r");
var_dump($arquivo);
//Nulo e Vazio

$nulo = NULL;
$vazio = "";



?>