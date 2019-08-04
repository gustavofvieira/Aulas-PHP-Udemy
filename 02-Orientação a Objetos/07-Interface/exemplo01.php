<?php
interface Veiculo{

    public function acelerar($velocidade);
    public function frenar($velocidade);
    public function trocarMarcha($marcha);
    
}

class Civic implements Veiculo{
    public function acelerar($velocidade){
        echo "Acelerou ".$velocidade." KM/h";
    }
    public function frenar($velocidade){
        echo "Frenou ".$velocidade." KM/h";
    }
    public function trocarMarcha($marcha){
        echo "marcha atual ".$marcha;
    }
}

$carro = new Civic();
$carro->trocarMarcha(2);