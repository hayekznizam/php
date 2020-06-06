<?php
session_id('ejs055givve3f9act4kv3a1hh1');

require_once("config.php");

//ela requere um novo id de session
session_regenerate_id();

echo session_id();

var_dump($_SESSION);


?>