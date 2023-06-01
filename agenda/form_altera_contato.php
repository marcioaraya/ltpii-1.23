<?php

	include "inc/funcoes_agenda.inc.php";
	
	$id=$_GET["id"];
	
	$contato = recupera_contato($id);

	
?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Alterar Contato</title>
    </head>
    <body>
        <h1>Alterar Contato</h1>
        <form method="GET" action="alterar_contato.php">
			<input type="hidden" name="id" value="<?php echo $contato["id"] ?>">
            <label for="id_n">Nome:</label>
            <input type="text" name="nome" id="id_n" value="<?php echo $contato["nome"] ?>">
            <br>
            <label for="id_t">Telefone:</label>
            <input type="text" name="tel" id="id_t" value="<?php echo $contato["fone"] ?>">
            <br>
            <input type="submit">
        </form>
    </body>
</html>




