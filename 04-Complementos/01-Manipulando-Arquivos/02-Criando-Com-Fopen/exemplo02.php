<?php
require_once("config.php");
$sql = new Sql();

$usuarios = $sql->select("select * from tb_usuarios order by deslogin");
//print_r($usuarios);
//echo json_encode($usuarios);  
$headers = array();
foreach($usuarios[0] as $key => $value){
    array_push($headers, ucfirst($key));
}
//print_r($headers);
//echo implode(",",$headers);
$file = fopen("usuarios.csv","w+");
fwrite($file, implode(",",$headers)."\r\n");
//array encadeado por causa do pdo que vem no stmt prepare
foreach($usuarios as $row){ //foreach nas linhas
    $data = array();
    foreach($row as $key => $value){// foreach nas colunas
        array_push($data,$value);
    }// fecha o foreach coluna
    fwrite($file, implode(",",$data)."\r\n");
}// fecha o foreach linha
fclose($file);

