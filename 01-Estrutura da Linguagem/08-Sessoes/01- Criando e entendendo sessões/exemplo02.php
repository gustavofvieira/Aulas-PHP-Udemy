<?php 
require_once("config.php");
//session_start(); // inicia a session nesta pagina;// pode mudar no php.ini no session start para iniciar em todas as paginas, mas via de regra em toras as paginas deverm ter o session start
session_unset($_SESSION["nome"]);//limpa a variavel de sessão
session_destroy();// limpa a variavel e destroi

echo $_SESSION["nome"];
