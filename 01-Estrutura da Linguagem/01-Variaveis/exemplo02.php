<?php 
$nome = "Hcode";
$site = 'www.hcode.com.br';

$ano = 1990;

$salario = 5500.99;
$bloqueado = false;
//////////////////////////////////////////
$frutas = array("abacaxi","laranja","manga"); // array
echo $frutas[2];//exibindo por indice
echo "<br/>";
$nascimento = new DateTime();
//var_dump($nascimento);
//////////////////////////////////////////
$arquivo = fopen("exemplo02.php", "r");//leitura de arquivo
//var_dump($arquivo);
$nulo = NULL;
$vazio = "";

?>