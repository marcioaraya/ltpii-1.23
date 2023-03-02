<?php
class Televisao {
# atributos
private $status;
private $canal;
private $volume;

# métodos

public function __construct(){
    /* este método é o construtor desta classe
    O construtor é o método chamado quando é criada uma
    instância da classe.
    No PHP é padronizado o nome __construct() como nome do método construtor.
    Em outras linguagens, como Java, o construtor tem o mesmo nome da classe
    */

    /*
      para acessar um atributo ou método dentro de uma classe, é necessário
      usar o "$this->"
      Observe que não é necessário colocar o $ na frente dos nomes de atributos
      O correto é $this->canal 
      $this->$canal é incorreto (não precisa o $ na frete do canal)
    */
    $this->status = false;
    $this->canal = 3;
    $this->volume = 10;
}

public function ligaDesliga(){
    $this->status = !$this->status;
}

public function aumentaCanal(){
    $this->canal++;
}

public function diminuiCanal(){
    $this->canal--;
}

public function aumentaVolume(){
    $this->volume++;
}

public function diminuiVolume(){
    $this->volume--;
}

public function mostraCanal(){
    return $this->canal;
}

public function mostraVolume(){
    return $this->volume;
}

public function mostraStatus(){
    return $this->status==0?"desligada":"ligada";
}

}