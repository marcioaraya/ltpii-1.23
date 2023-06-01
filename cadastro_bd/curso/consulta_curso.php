<!DOCTYPE html>
<!-- consulta_curso.php 
     lista os cursos cadastrados -->
<html>
	<head>
	  <title>Cadastro de curso</title>
	  <meta charset="utf-8">
	</head>
	<body>

	<?php //cadastro.php
// lista cursos cadastrados  

  include_once "../inc/conectabd.inc.php";

  echo "<h1>Cursos Cadastrados</h1>";
  
  // lista cursos já cadastrados
  $query = "SELECT id_curso, ds_curso, nr_carga_horaria, dt_inicio FROM tb_curso;";
  if ($result = mysqli_query($link, $query)) {
	  echo "<table border='1'>";
	  echo '<tr><th>id</th><th>Descrição</th><th>Carga Horária</th><th>Dt.Início</th><th colspan="2">Ações</th></tr>';
	  // busca os dados lidos do banco de dados
	  while ($row = mysqli_fetch_assoc($result)) {
		  $id = $row["id_curso"];
		  $curso = $row["ds_curso"];
                  $nr_carga_horaria = $row["nr_carga_horaria"];
                  $dt_inicio = $row["dt_inicio"];
                  
		  echo "<tr>";
		  echo "<td>" . $id . "</td>";
		  echo "<td>" . $curso . "</td>";
                  echo "<td>" . $nr_carga_horaria . "</td>";
                  echo "<td>" . $dt_inicio . "</td>";
		  // cria link para EXCLUSAO do respectivo id_curso
		  echo '<td><a href="exclusao_curso.php?id='. $row["id_curso"] . '">Excluir</a></td>';
		  // cria link para ALTERACAO do respectivo id_curso
		  echo '<td><a href="form_alteracao_curso.php?id='. $row["id_curso"] . '&curso='.urlencode($curso).'">Alterar</a></td>';
		  
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
	<a href="cadastro_curso.php">Cadastrar novo curso</a>
	<br>
	<a href="../index.html">Menu Principal</a>   
        </body>
</html>
