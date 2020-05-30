<?php

// Precedencia de Operadores
$resultado = 10+3/2;
echo $resultado;
echo "<br>";
$resultado1 = (10 + 3) / 2;
echo $resultado1;

$resultado2 = (10+3)/2 > 5 && 10 + 5 <20;
echo "<br>";
var_dump($resultado2);

$resultado3 = (10+3)/2 > 5 || 10 + 5 <20;
echo "<br>";
var_dump($resultado3);
?>
