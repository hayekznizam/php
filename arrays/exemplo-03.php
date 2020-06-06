<?php
$pessoas = array();

//adicionando item no array depois dele criado

array_push($pessoas,array(
	'nome' =>"João",
	'idade' =>20
));

array_push($pessoas,array(
	'nome' =>"Vinícius",
	'idade' =>80
));

print_r($pessoas);

print_r($pessoas[0]);

print_r($pessoas[0]['nome']);


?>