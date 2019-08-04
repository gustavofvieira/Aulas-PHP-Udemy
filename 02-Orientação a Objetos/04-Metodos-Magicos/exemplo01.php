<?php
class Endereco{

    private $logradouro;
    private $numero;
    private $cidade;
    // __algumacoisa é um metodo magico todo metodo magico inicia com o __
    public function __construct($a, $b, $c){
        $this->logradouro = $a;
        $this->numero = $b;
        $this->cidade = $c;
    }
    public function __destruct(){
        var_dump("DESTRUIR");
    }

    public function __toString(){
        return $this->logradouro.",".$this->numero.",".$this->cidade;
    }
    

    public function getLogradouro(){
        return $this->logradouro; 
    }
    public function setLogradouro($logradouro){
        $this->logradouro = $logradouro;
    }
}

$endereco = new Endereco("Rua Nova Bahia","25","Salvador");
var_dump($endereco);
echo $endereco."<br>";  // utilizando o __tostring

unset($endereco);
var_dump($endereco);