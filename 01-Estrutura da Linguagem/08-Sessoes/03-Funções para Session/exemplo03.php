<?php 
session_id('sflcvs6lrvakhhqfmj60r2c9h9'); // recupera a session e vc pode utilizar em uma aba anonima por exemplo, e traz todos os valores da sessão
require_once("config.php");
//session_start(); // inicia a session nesta pagina;
session_regenerate_id();// força o id a se regenerar// 
echo session_id();//exibe o Id de sessao
var_dump($_SESSION);

