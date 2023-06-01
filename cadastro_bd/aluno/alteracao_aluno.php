<!DOCTYPE html>
<!-- alteracao.php -->
<html>
	<head>
	  <title>Cadastro de aluno - Alteração</title>
	  <meta charset="utf-8">
	</head>
	<body>
<?php 
// efetua alteração do aluno informado em form_alteracao_aluno.php
  $id_aluno = $_GET["id_aluno"];
  $ds_aluno = $_GET["ds_aluno"];
  $id_curso = $_GET["id_curso"];
  
  include_once "../inc/conectabd.inc.php";

  $query = "UPDATE tb_aluno 
            SET ds_aluno = '$ds_aluno'
              , id_curso = $id_curso
	  WHERE id_aluno = $id_aluno;";
	 // echo $query.'<br>';
  if ($result = mysqli_query($link, $query)) {
	  echo "Alteração efetuada com sucesso";
  } else {
	  echo mysqli_error($link);
  }
  
  // fecha a conexão
  mysqli_close($link);
?>  
 <br>
 <a href="consulta_aluno.php">Ver alunos cadastrados</a>
 
 </body>
</html>

