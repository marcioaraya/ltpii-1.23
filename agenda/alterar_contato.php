<?php

include "inc/funcoes_agenda.inc.php";

$id = $_GET["id"];
$nome = $_GET["nome"];
$tel = $_GET["tel"];

altera_contato($id, $nome, $tel);

header('Location: consulta_agenda.php');