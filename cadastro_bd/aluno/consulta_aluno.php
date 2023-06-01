<!DOCTYPE html>
<!-- consulta_aluno.php 
     lista os alunos cadastrados -->
<html>
	<head>
	  <title>Cadastro de Aluno</title>
	  <meta charset="utf-8">
	</head>
	<body>

	<?php //consulta_aluno.php
// lista alunos cadastrados  

  include_once "../inc/conectabd.inc.php";

  echo "<h1>Alunos Cadastrados</h1>";
  
  // lista alunos já cadastrados
  $query = "SELECT id_aluno, ds_aluno, ds_curso
            FROM tb_aluno a,
                 tb_curso c
            WHERE a.id_curso = c.id_curso;";
  if ($result = mysqli_query($link, $query)) {
	  echo "<table border='1'>";
	  echo '<tr><th>id</th><th>Nome do Aluno</th><th>Curso</th><th colspan="2">Ações</th></tr>';
	  // busca os dados lidos do banco de dados
	  while ($row = mysqli_fetch_assoc($result)) {
		  $id_aluno = $row["id_aluno"];
		  $ds_aluno = $row["ds_aluno"];
                  $ds_curso = $row["ds_curso"];
                  
		  echo "<tr>";
		  echo "<td>" . $id_aluno . "</td>";
		  echo "<td>" . $ds_aluno . "</td>";
                  echo "<td>" . $ds_curso . "</td>";
                  // cria link para EXCLUSAO do respectivo id_curso
		  echo '<td><a href="exclusao_aluno.php?id='. $row["id_aluno"] . '">Excluir</a></td>';
		  // cria link para ALTERACAO do respectivo id_curso
		  echo '<td><a href="form_alteracao_aluno.php?id='. $row["id_aluno"].'">Alterar</a></td>';
		  
		  echo "</tr>";
		  // ou
		  // printf("<tr><td>%s</td><td>%s</td></tr>", $row["id_curso"], $row["ds_curso"] );
	  }
	  echo "</table>";
	  // libera a área de memória onde está o resultado
	  mysqli_free_result($result);
  }
  // fecha a conexão
  mysqli_close($link);
?>  
	<br>
	<a href="cadastro_aluno.php">Cadastrar novo aluno</a>
	<br>
	<a href="../index.html">Menu Principal</a>        
	</body>
</html>
