<?php 
class Pessoa{
    public $nome = "Nome";
    protected $idade = 40;
    private $senha = "12345";

    public function verDados(){
        echo $this->nome . "<br/>";
        echo $this->idade . "<br/>";
        echo $this->senha . "<br/>";
    }

}
$objeto = new Pessoa();
$objeto->verDados();