<?php

class Adulto {
    private $peso = 0.0;

    public function engordar($quilos=0.0){
        $this->peso += $quilos;
    }

    public function emagrecer($quilos=0.0){
        $this->peso -= $quilos;
    }

    public function getPeso(){
        return $this->peso;
    }

    public function setPeso($p=0.0){
        $this->peso = $p;
    }

}

# cria objeto da classe Adulto e atribui para $pessoa1
$pessoa1 = new Adulto();

//echo $pessoa1->peso;
echo $pessoa1->getPeso() ."<br>";
$pessoa1->setPeso(70.5);
echo $pessoa1->getPeso()."<br>";
$pessoa1->engordar(10);
echo $pessoa1->getPeso()."<br>";
$pessoa1->emagrecer(3.7);
echo $pessoa1->getPeso()."<br>";








?>