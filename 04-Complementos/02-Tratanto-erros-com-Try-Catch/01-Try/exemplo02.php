<?php

function trataNome($name){
    if(!$name){
        throw new Exception ("Nenhum Nome foi infomado", 1);
    }

    echo ucfirst($name)."<br>";
}

try{
    trataNome("Joao");
    trataNome("");
    
}catch(Exception $e){

    echo $e->getMessage();
} finally{ // finally é a exceção final
    echo "Executou o Try";// pode mandar um email pro adimin ja que ele passou por try e catch
}