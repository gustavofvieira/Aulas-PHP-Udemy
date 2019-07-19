<?php 
function ola(){
	echo "Hello";
}
function ola2(){
	return "Hello";
}
ola();
$frase = ola2();
echo strlen($frase);

echo ola2(); // por causa do return com a string põe o echo