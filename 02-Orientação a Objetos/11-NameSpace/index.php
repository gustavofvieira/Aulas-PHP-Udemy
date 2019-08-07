<?php
require_once("config.php");
use CLiente\Cadastro;//utilizando a classe do namespace cliente

$cad = new Cadastro();// está puxando da namespace cliente
$cad->setNome("Nomiho");
$cad->setEmail("Emailnho@mail.com.br");
$cad->setSenha("Senhinh"); 

$cad->registrarVendas();

echo $cad;


