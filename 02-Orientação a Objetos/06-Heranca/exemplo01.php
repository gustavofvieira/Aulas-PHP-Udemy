<?php

class Documento{
    private $numero;

    public function getNumero(){
        return $this->numero;
    }
    public function setNumero($n){
        $this->numero = $n;
    }

    
}

class Cpf extends Documento{
    public function validar():bool{
        $numeroCpf = $this->getNumero();
        //validação do cpf
        return true;
    }
}

$doc = new Cpf();
$doc->setNumero("123456");
var_dump($doc->validar());
echo "<br/>";
echo $doc->getNumero(); 
