<?php
//include "exemplo01.php";// incluindo o arquivo pra chamar a função
//include_once "exemplo01.php";// include_once só traz o arquivo uma vez
require "exemplo01.php";// incluindo o arquivo pra chamar a função
require_once "exemplo01.php";// incluindo o arquivo pra chamar a função
//require obriga que o arquivo exista e que o arquivo esteja funcionando corretamente
// include n tem essa questão de verificação
$resultado = somar(10,20);
echo $resultado;