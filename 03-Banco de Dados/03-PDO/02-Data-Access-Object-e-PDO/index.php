<?php
require_once("config.php");
// require_once("classes/usuarios.php");
 //require_once("classes/sql.php");
 
/* $sql = new Sql();
$usuarios = $sql->select("SELECT * FROM tb_usuarios");
echo json_encode($usuarios);*/


#################### Carrega um usuário
//$root = new Usuario();
//$root->loadById(1);
//echo $root;
###########################################


##### Carrega Lista de Usuários
//$lista = Usuario::getList();// chamando como metódo estático
//echo json_encode($lista);
###############################
#Busca Por Login
//$search = Usuario::search("jo");
//echo json_encode($search);
###############################

# Login User
$user = new Usuario();
$user->login("root","123456");
echo $user;