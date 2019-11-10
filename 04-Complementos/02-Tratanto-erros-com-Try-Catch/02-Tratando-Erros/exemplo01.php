<?php 

# Para tratar o erro tem que passar os parametros respectivamente
function error_handler($code,$message, $file, $line){
    echo json_encode(array(
        "code"=>$code,
        "message"=>$message,
        "file"=>$file,
        "line"=>$line
               
    ));
}
# função php
set_error_handler("error_handler");


$total = 100/0;