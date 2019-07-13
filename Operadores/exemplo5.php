<?php 
$a = 50;
$b = 35;

var_dump($a <=> $b); // spacechip - se o a for maior retorna 1, se os dois forem iguais retorna 0 e se o b for maior traz -1
echo "<br>";
$a = 50;
$b = 50;

var_dump($a <=> $b);// da para resumir no elif
echo "<br>";
$a = 35;
$b = 50;

var_dump($a <=> $b);