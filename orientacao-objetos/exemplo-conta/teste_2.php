<?php
// salvar como teste.php em C:\XAMPP\HTDOCS\OBJ

include_once "contaespecial.class.php";

$conta2 = new ContaEspecial(0, 456, 1000);
echo '<hr>';
var_dump($conta2);
echo '<hr>';
echo 'vou depositar<br>';
$conta2->Depositar(500);
echo '<hr>';
//var_dump($conta2);
echo '<hr>';
echo "O saldo eh:".$conta2->ObterSaldo()."<br>";
echo '<hr>';
echo ' vou sacar 550<br>';
$conta2->Sacar(550);
echo "O saldo eh:".$conta2->ObterSaldo()."<br>";
echo '<hr>';
var_dump($conta2);
echo '<hr>';
echo ' vou sacar 1000<br>';
$conta2->Sacar(1000);
?>