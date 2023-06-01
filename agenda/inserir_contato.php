<?php

include "inc/funcoes_agenda.inc.php";

$nome = $_GET["nome"];
$tel = $_GET["tel"];

cria_contato($nome, $tel);

header('Location: consulta_agenda.php');