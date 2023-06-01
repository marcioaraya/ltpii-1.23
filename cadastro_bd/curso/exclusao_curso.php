<!DOCTYPE html>
<!-- cadastro.html -->
<html>
	<head>
	  <title>Cadastro de curso - Exclusão</title>
	  <meta charset="utf-8">
	</head>
	<body><?php //exclusao.php
// efetua a exclusão do curso cujo id seja informado.
  $id = $_GET["id"];
  
  include_once "../inc/conectabd.inc.php";

  $query = "delete from tb_curso where id_curso=$id;";
  if ($result = mysqli_query($link, $query)) {
	  echo "Exclusão efetuada com sucesso";
  }
  
  // fecha a conexão
  mysqli_close($link);
  
 ?>  
 <br>
 <a href="consulta_curso.php">Ver cursos cadastrados</a>
 
 </body>
</html>
