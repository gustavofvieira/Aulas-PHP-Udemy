<?php
$json = 
'[{"nome":"Jo\u00e3o","idade":20},{"nome":"Glaucio","idade":25}]';

$data = json_decode($json, true);// rest full consumindo o json e transformando em array - virgula true para ele não virar objeto
var_dump($data);
