<?php
$conn = new mysqli("localhost", "root", "", "dbphp7");
if($conn->connect_error){
    echo "ERROR: ".$conn->connect_error;
    exit;
}

$stmt = $conn->prepare("insert into tb_usuarios (deslogin, dessenha) values (?,?)");
$stmt->bind_param("ss",$login,$senha);//o bind em cada parametro é passando o tipo , o tipo do values vai ser string então s, se fosse int i e assim sucessivamente;
$login = "user";
$senha = "654321";
$stmt->execute();