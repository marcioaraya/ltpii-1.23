<?php
// salvar como teste_1.php
include_once "conta.class.php";

$conta1 = new Conta(0, 123);

echo '<hr>';
var_dump($conta1);
echo '<hr>';

echo "O saldo eh:".$conta1->ObterSaldo()."<br>";
$conta1->Depositar(500);
echo "O saldo eh:".$conta1->ObterSaldo()."<br>";
$conta1->Depositar(-2000);

echo "O saldo eh:".$conta1->ObterSaldo()."<br>";
$conta1->Sacar(500);
echo "O saldo eh:".$conta1->ObterSaldo()."<br>";

?>