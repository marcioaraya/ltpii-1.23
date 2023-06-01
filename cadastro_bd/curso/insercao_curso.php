<!DOCTYPE html>
<!-- insercao_curso.php -->
<html>
	<head>
	  <title>Cadastro de curso - Inclusão</title>
	  <meta charset="utf-8">
	</head>
	<body>
<?php 
// efetua inclusao do curso informado em cadatro_curso.html

  $curso = $_GET["curso"];
  $nr_carga_horaria = $_GET["nr_carga_horaria"];
  $dt_inicio = $_GET["dt_inicio"];
  
  include_once "../inc/conectabd.inc.php";

  $query = "INSERT INTO tb_curso 
      (ds_curso, nr_carga_horaria, dt_inicio) 
	  values
      ('$curso', $nr_carga_horaria, '$dt_inicio');";
  if ($result = mysqli_query($link, $query)) {
	  echo "Inclusão efetuada com sucesso";
  }
  
  // fecha a conexão
  mysqli_close($link);
?>  
 <br>
 <a href="consulta_curso.php">Ver cursos cadastrados</a>
 
 </body>
</html>

