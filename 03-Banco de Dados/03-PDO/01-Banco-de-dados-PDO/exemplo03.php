<?php
//PHP DATA OBJECT 
 $conn = new PDO("mysql:dbname=dbphp7;host=localhost", "root", "");//DSN 
 $stmt = $conn->prepare("INSERT INTO tb_usuarios (deslogin,dessenha) VALUES (:LOGIN,:PASSWORD)");
 $login = "jose";
 $password ="123456";
 
 $stmt->bindParam(":LOGIN",$login);//bind passa o parametro e valor
 $stmt->bindParam(":PASSWORD",$password);
 $stmt->execute();
echo "Inserido";
/*
 $results = $stmt->fetchAll(PDO::FETCH_ASSOC);
 foreach($results as $row){
    foreach($row as $key => $value){
        echo "<strong>".$key.": </strong>".$value."<br/>";
    }
    echo "===========================================<br/>";
}
 
 var_dump($results); 

 */