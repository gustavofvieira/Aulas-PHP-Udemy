<?php 
$nome = $_GET["a"];
$numero = (int)$_GET["b"]; // com o cast pq toda requisiçao get vira string
var_dump($nome);
var_dump($numero);
echo "<br/>";
//http://localhost/Aulas-Udemy/Variaveis/exemplo03.php?a=123&b=456// passando dois valores pela uri com &
$ip = $_SERVER["REMOTE_ADDR"];// pegar o ip do cliente
$nomeArquivo = $_SERVER["SCRIPT_NAME"];// pegar o endereço do arquivo.
echo $ip; 
echo "<br/>"; 
echo $nomeArquivo; 

?>