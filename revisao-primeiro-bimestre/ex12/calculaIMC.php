<?php
require_once 'iDaoModeCrud.interface.php';
require_once 'PdoConexao.class.php';
require_once 'PessoaIMC.class.php';
require_once 'PessoaIMCDao.class.php';
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cálculo IMC</title>
</head>
<body>
    <h1>Cálculo do IMC</h1>
    <?php
    $nome = $_GET["nome"];
    $altura = $_GET["altura"];
    $peso = $_GET["peso"];

    $imc = round($peso/($altura*$altura), 2);

    $situacao = "";
    if ($imc >= 40) {
        $situacao = "Obesidade III (mórbida)";
    } else if ($imc >=35) {
        $situacao = "Obesidade II";
    } else if ($imc >= 30) {
        $situacao = "Obesidade I";
    } else if ($imc >= 25) {
        $situacao = "Acima do peso";
    } else if ($imc >= 18.5) {
        $situacao = "Peso normal";
    } else if ($imc >= 17) {
        $situacao = "Abaixo do peso";
    } else {
        $situacao = "Muito abaixo do peso";
    }

    $pessoa = new PessoaIMC($nome, $imc, $situacao);
    $PersistenciaPessoa = new PessoaIMCDao();

    if($PersistenciaPessoa->create($pessoa)){
       echo '<p>Inseridos no banco com Êxito</p>';
    }

    ?>

    <p><a href="form.html">Novo cálculo</a></p>
</body>
</html>