<?php

$json = '[{"nome":"Jo\u00e3o","idade":20},{"nome":"Vin\u00edcius","idade":80}]';
//voltando parra o array
$data = json_decode($json,true);
//sem o true ele transforma tudo em objeto

var_dump($data);
?>