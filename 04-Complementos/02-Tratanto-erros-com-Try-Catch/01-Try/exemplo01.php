<?php

try{
    # criando excessão para o cacth
    throw new Exception("Houve um erro",400);//parametro do erro
}catch(Exception $e){
    echo json_encode(array(
        "message"=>$e->getMessage(),
        "line"=>$e->getLine(),
        "file"=>$e->getFile(),
        "code"=>$e->getCode()
    ));

}