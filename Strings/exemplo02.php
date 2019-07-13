<?php 
$nome = "gustavo";
$nome = str_replace("o","0",$nome); // primeiro parametro é o que vc quer trocar o segundo é por quem vc quer trocar e o terceiro é onde vc vai trocar
$nome = str_replace("s","$",$nome); // primeiro parametro é o que vc quer trocar o segundo é por quem vc quer trocar e o terceiro é onde vc vai trocar
echo $nome;
echo "<br>";
$palavra = "mãe";
$frase = "A repetição é mãe da retenção";
$q = strpos($frase, "mãe");// acha a posição da string
var_dump($q);
echo "<br>";
$texto = substr($frase, 0, $q);// primeiro parametro passa toda a string segundo é o parametro que inicia o terceiro é até onde pega a string
echo $texto;
echo "<br>";
$texto2 = substr($frase, $q + strlen($palavra), strlen($frase));// primeiro parametro passa toda a string segundo é o parametro que inicia o terceiro é até onde pega a string
echo $texto2;