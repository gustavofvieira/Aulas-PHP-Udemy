<?php
//PHP DATA OBJECT 
 $conn = new PDO("mysql:dbname=dbphp7;host=localhost", "root", "");//DSN 
 $stmt = $conn->prepare("SELECT * FROM tb_usuarios order by deslogin");
 $stmt->execute();

 $results = $stmt->fetchAll(PDO::FETCH_ASSOC);
 foreach($results as $row){
    foreach($row as $key => $value){
        echo "<strong>".$key.": </strong>".$value."<br/>";
    }
    echo "===========================================<br/>";
}
 
 var_dump($results); 