<?php
//PHP DATA OBJECT 
 $conn = new PDO("mysql:dbname=dbphp7;host=localhost", "root", "");//DSN 
 $conn->beginTransaction();
 $stmt = $conn->prepare("DELETE FROM tb_usuarios WHERE idusuario = ?");
 
 $id = 2;
 
 $stmt->execute(array($id));
 //$conn->rollback();//cancela e desfaz o que foi feito
 $conn->commit();//confirma o que foi feito
echo "Excluido ";
