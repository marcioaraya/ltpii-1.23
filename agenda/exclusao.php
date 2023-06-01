<?php

include "inc/funcoes_agenda.inc.php";

$id = $_GET["id"];

exclui_contato($id);

header('Location: consulta_agenda.php');