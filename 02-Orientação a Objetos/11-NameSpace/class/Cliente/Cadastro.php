<?php
namespace Cliente;

class Cadastro extends \Cadastro {//contra barra volta um diretório e está herdando da outra classe cadastro
    public function registrarVendas(){
        echo "Foi registrada uma venda para o cliente " . $this->getNome();
    }
}