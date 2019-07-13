<?php 
// aula de escopo de variaveis
$nome = "Guguinha";// nome fora do escopo
function teste(){
	global $nome;//nome é uma variavel global dentro do escopo da função por isso consegue ser iniciadas
	echo $nome;
	
}
function teste2(){
	$nome = "João";
	echo $nome;
}

teste(); // chama a função //
teste2(); 
?>