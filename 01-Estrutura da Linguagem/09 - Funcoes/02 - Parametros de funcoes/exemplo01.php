<?php 
function ola($texto){
	return "Ola $texto<br>";
}
function ola2($texto = "mundo2", $periodo ="Bom dia"){
	return "Ola $texto $periodo <br> ";
}// valores que são obrigatórios sempre tem que está a esquerda
echo ola("mundo");// passando por parametro o texto
echo ola2();// já definido o valor dentro do parametro então não é obrigatório a passagem de parametro na função
echo ola("coisinho");
