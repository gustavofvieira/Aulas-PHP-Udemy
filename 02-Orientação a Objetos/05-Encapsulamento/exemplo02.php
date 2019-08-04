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
class Programador extends Pessoa{
    
    public function verDados(){
        echo get_class($this);// para saber no metodo qual a instacia está chamando
        echo $this->nome . "<br/>";
        echo $this->idade . "<br/>";
        echo $this->senha . "<br/>";
    }
}
$objeto = new Programador();
$objeto->verDados();