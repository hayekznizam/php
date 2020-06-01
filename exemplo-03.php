<?php
//Utilizando str Replace
$empresa = "Hcode";

//trocando uma letra por outro caracter - str replace - O que vai ser trocado, por quem, e em qual variavel
$empresa = str_replace("o", "0", $empresa);

echo $empresa;

$empresa = str_replace("e", "3", $empresa);

echo $empresa;

?>