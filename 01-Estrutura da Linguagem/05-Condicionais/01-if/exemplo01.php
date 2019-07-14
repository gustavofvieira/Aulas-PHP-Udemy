<?php
$qualSuaIdade = 65;
$idadeCrianca = 12;
$idadeMaior = 18;
$idadeMelhor = 65;
if($qualSuaIdade < $idadeCrianca){
	echo "Criança";
}elseif($qualSuaIdade < $idadeMaior){
	echo "Adolecente";
}else if($qualSuaIdade < $idadeMelhor){
	echo "Adulto";
}else{
	echo "Idoso";
}

echo "<br>";
echo($qualSuaIdade < $idadeMaior)?"Menor de idade":"Maior de idade";//operação ternária "?" significa então, no caso se e o : significa o else