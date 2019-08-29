<?php
//PHP DATA OBJECT 
 $conn = new PDO("mysql:dbname=dbphp7;host=localhost", "root", "");//DSN 
 $stmt = $conn->prepare("UPDATE tb_usuarios SET deslogin = :LOGIN, dessenha = :PASSWORD WHERE idusuario = :ID");
 $login = "jose";
 $password ="6";
 $id = 3;
 $stmt->bindParam(":LOGIN",$login);//bind passa o parametro e valor
 $stmt->bindParam(":PASSWORD",$password);
 $stmt->bindParam(":ID",$id);
 $stmt->execute();
echo "Alterado ";
