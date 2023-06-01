<!DOCTYPE html>
<!-- cadastro.html -->
<html>
	<head>
	  <title>Cadastro de aluno</title>
	  <meta charset="utf-8">
	</head>
	<body>
	<h1>Cadastrar novo aluno</h1>
		<form action="insercao_aluno.php" 
		      method="GET">
			<label for="id_aluno">
			Nome:
			</label>
			<input type="text" name="aluno" id="id_aluno">
			<br>
                        <label for="id_curso">
			Curso:
			</label>
			<?php
                          include_once "../inc/conectabd.inc.php";
                          include "../inc/funcoes.inc.php";
                          
                          monta_select_curso();
                        ?>
			<br>
			<input type="submit" value="Ok">
		</form>
	</body>
</html>