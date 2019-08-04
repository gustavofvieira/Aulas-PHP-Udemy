<?php
abstract class Animal{
    public function falar(){
        return "Som";
    }
    
    public function mover(){
        return "Anda";
    }
}

class Cachorro extends Animal{
    public function falar(){
        return "Late";// muda o comportamento do metodo sobrescrita
    }
}

class Gato extends Animal{
    public function falar(){
        return "Mia";
    }
}

class Passaro extends Animal{
    public function falar(){
        return "Canta";
    }
    public function mover(){
        return "Voa e ". parent::mover();//chamando o metódo mover da classe pai no caso animal  
    }
}

$pluto = new Cachorro();
echo $pluto->falar()."<br/>";
echo $pluto->mover()."<br/>";

echo "----------------------------------- <br/>";

$gatito = new Gato();
echo $gatito->falar()."<br/>";
echo $gatito->mover()."<br/>";

echo "----------------------------------- <br/>";

$louro = new Passaro();
echo $louro->falar()."<br/>";
echo $louro->mover()."<br/>";
