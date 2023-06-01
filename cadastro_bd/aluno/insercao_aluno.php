<!DOCTYPE html>
<!-- insercao_aluno.php -->
<html>
	<head>
	  <title>Cadastro de aluno - Inclusão</title>
	  <meta charset="utf-8">
	</head>
	<body>
<?php 
// efetua inclusao do aluno informado em cadastro_aluno.php

  $aluno = $_GET["aluno"];
  $id_curso = $_GET["id_curso"];
  
  include_once "../inc/conectabd.inc.php";
  $query = "INSERT INTO tb_aluno 
            (ds_aluno, id_curso) 
	    VALUES
            ('$aluno', $id_curso);";
  if ($result = mysqli_query($link, $query)) {
	  echo "Inclusão efetuada com sucesso";
  }
  
  // fecha a conexão
  mysqli_close($link);
?>  
 <br>
 <a href="consulta_aluno.php">Ver alunos cadastrados</a>
 
 </body>
</html>

