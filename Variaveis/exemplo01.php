<?php 
$nome = "Guguinha";
$sobrenome = "Ferreira";
$nomeCompleto = $nome ." ".$sobrenome; //concatenando, com ponto.
echo $nomeCompleto;
//CONCATENANDO
//exit; // para a execução do php

$anoNasc = 1996;
echo $nome;
var_dump($nome);
echo "<br/>";//echo com tags html
echo $anoNasc;
var_dump($anoNasc);// saber o tipo da variável

// recriando variavel com unset
unset($nome, $anoNasc);// destruindo a variavel, tirando da memória
// unset deixa a variavel indefinida, ela não existe
//isset para saber se a variavel está definida, se ela existe
if(isset($nome)){ //verifica se a variavel está definida
	echo $nome;
}
echo $nome;
echo $anoNasc;

?>