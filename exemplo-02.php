<?php

//Incluindo arquivo acom a função soma do arquivo 1
//include "inc/exemplo-01.php";
require_once "inc/exemplo-01.php";
require_once "inc/exemplo-01.php";


$resultado = somar (10,25);

echo $resultado;

/*diferenca de include  e require:
require precisa do arquivo funcionando
include tenta executar mesmo com erro e tem mais funções
require once verifica se o arquivo foi chamado mais de uma vez
*/


?>
