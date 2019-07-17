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
echo json_encode($pessoas);// encode é o que fornece o json para a aplicação o rest
?>