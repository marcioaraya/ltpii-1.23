<?php
// salvar como conta.class.php em C:\XAMPP\HTDOCS\OBJ
class Conta {
//atributos
protected $Saldo;
protected $Numero;

// métodos
  function __construct($s, $n) {
	  $this->Saldo = $s;
	  $this->Numero = $n;
  }
  
  function Depositar($v){
    if ($v >= 0){
      $this->Saldo += $v;
    } else {
      echo 'valor do depósito deve ser positivo<br>';
    }
    
  }
 
  function Sacar($v) {
    if ($this->Saldo >= $v) {
      $this->Saldo -= $v;
	  echo ' o saque foi de '.$v.'<br>';
    } else {
		echo 'saldo insuficiente <br>';
	}
  }
  
  function ObterSaldo() {
    return $this->Saldo;
  } 
} 
// salvar como conta.class.php em C:\XAMPP\HTDOCS\OBJ
?>




	