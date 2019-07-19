<?php
$a = 10;
function trocaValor($a){
	$a += 50;
	return $a;
}
echo $a;
echo "<br>";
echo trocaValor($a);
//passagem de parametro por referencia altera o valor da variável mesmo fora do escopo da função
echo "<br>";
echo "<br>";
$b = 10;
function trocaValor2(&$b){// passagem por referencia, o endereço da memória, então altera o valor da variável
	$b += 50;
	return $b;
}
echo $b;
echo "<br>";
echo trocaValor2($b);
echo "<br>";
echo $b;