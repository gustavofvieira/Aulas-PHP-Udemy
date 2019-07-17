<?php 
$pessoas = array();// array_push adciona um item depois que o array é criado, no exemplo está adcionando mais 1 array de pessoa
array_push($pessoas, array(
	'nome'=>'João',
	'idade'=>20
));

array_push($pessoas, array(
	'nome'=>'Glaucio',
	'idade'=>25
));
print_r($pessoas);//imprime todo o array
echo "<br>";
print_r($pessoas[0]);//imprime a posição e o conteudo da posição
echo "<br>";
print_r($pessoas[0]['nome']);//imprime o valor do atributo da posição
?>