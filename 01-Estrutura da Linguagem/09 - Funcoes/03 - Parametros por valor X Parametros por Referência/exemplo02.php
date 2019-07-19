<?php
$pessoa = array(
	'nome' => 'João',
	'idade' => 20
);

foreach ($pessoa as &$value) {// usando o & para alterar o valor na refrencia
	if(gettype($value) === 'integer') $value +=10;//gettype retorna o tipo de dado da variável
	echo $value."<br>";
}
print_r($pessoa);