<?php
spl_autoload_register(function($nameClass){
    $dirClass = "class";
    $filename = $dirClass . DIRECTORY_SEPARATOR . $nameClass.".php";//DIRECTORY_SEPARATOR identifica o S.O e põe a barra automaticamente
    if(file_exists($filename)){
        
        require_once($filename);
    }
});
