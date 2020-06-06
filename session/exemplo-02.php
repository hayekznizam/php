<?php

require_once("config.php");
//session_start();

//apagando a variavel de sessao
session_unset($_SESSION['nome']);

echo $_SESSION['nome'];

//apagando a sessao
session_destroy();

?>
