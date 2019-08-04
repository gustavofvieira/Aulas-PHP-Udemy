<?php
 class Carro{
     private $modelo;
     private $motor;
     private $ano;
     
     public function getModelo(){
        return $this->modelo;
     }
     public function setModelo($modelo){
        $this->modelo = $modelo;
    }

    public function getMotor():float{//cast do tipo do retorno
        return $this->motor;
     }
     public function setMotor($motor){
        $this->motor = $motor;
    }
    public function getAno():int{//cast do tipo do retorno
        return $this->ano;
     }
     public function setAno($ano){
        $this->ano = $ano;
    }

    public function exibir(){
        return array(
            "modelo"=>$this->getModelo(),
            "motor"=>$this->getMotor(),
            "ano"=>$this->getAno()
        );

    }
    
     
 }

$carro = new Carro();
$carro->setModelo("Meriva");
$carro->setMotor("1.0");
$carro->setAno("2010");

var_dump($carro->exibir());

print_r($carro->exibir());


