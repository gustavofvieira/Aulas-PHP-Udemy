<?php
//intterpolação de variáveis
$nome = "Guguinha";
$nome2 = 'Ferreira';
//var_dump($nome, $nome2);
echo "<br>";
echo "ABC $nome";// traz o valor da variavel
echo "<br>";
echo 'ABC $nome';// 
echo "<br>";
$texto = "guguinha vieira";
echo $texto;
echo "<br>";
echo strtoupper($texto); // converte tudo para maiusculo
echo "<br>";
echo strtolower($texto); // converte tudo para minusculo
echo "<br>";
echo ucwords($texto); // converte todas as primeiras letras das palavras
echo "<br>";
echo ucfirst($texto); // só a primeira letra da primeira palavra em maiusculo