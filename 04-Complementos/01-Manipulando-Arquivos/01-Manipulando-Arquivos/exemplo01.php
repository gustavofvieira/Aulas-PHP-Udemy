<?php
$name ="images";
if(!is_dir($name)){
    mkdir($name);
    echo "diretório $name criado com sucesso!";
}else{
    rmdir($name);
    echo "Diretório Existente: $name foi removido";
}
