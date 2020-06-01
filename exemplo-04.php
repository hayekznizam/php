<?php
//Procurando algo na variavel
$frase = "A repetição é mãe da repetição.";
$palavra = "mãe";

//Paramentro, varáivel(alvo), o que se procura


$q = strpos($frase,"mãe");

var_dump($q);

//retirando o texto

$texto = substr($frase,0, $q);

var_dump($texto);

//
$texto2 = substr($frase, $q+strlen($palavra), strlen($frase));

var_dump($texto2);
echo $texto2;





?>