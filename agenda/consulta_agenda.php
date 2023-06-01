<!DOCTYPE html>
<!-- consulta_agenda.php 
     lista cadastros da agenda 
	 
	 Nesta aplicação simples implementamos uma agenda (cadastro de contatos) 
	 Os contatos são armazenados em um vetor multidimensional, onde cada linha
	 é um outro vetor que contém os dados do contato, apenas o nome e 
	 um telefone.
	 
	 Os dados da agenda são armazenados no formato JSON em um arquivo texto.
	 
	 
	 
	 -->
<html>
	<head>
	  <title>Agenda Telefônica</title>
	  <meta charset="utf-8">
	</head>
	<body>

	<?php 

  echo "<h1>Pessoas Cadastradas</h1>";
   
  include "./inc/funcoes_agenda.inc.php";
  
  static $ult_id = 0;

/*
os dados abaixo são para exemplificar valores iniciais na agenda

$agenda = array(array("id"=>1, "nome"=>'Marcio', "fone"=>"99991-1234"),
		array("id"=>2, "nome"=>'Pedro', "fone"=>"99992-1234"),
		array("id"=>3, "nome"=>'Maria', "fone"=>"99993-1234"),
		array("id"=>4, "nome"=>'Carla', "fone"=>"99994-1234"),
		array("id"=>5, "nome"=>'Samuel', "fone"=>"99995-1234"),
		array("id"=>6, "nome"=>'Ana', "fone"=>"99996-1234"),
		array("id"=>7, "nome"=>'João', "fone"=>"99997-1234")
		);

  grava_agenda($agenda);
*/
  $agenda = le_agenda();


  echo "<table border='1'>";
  echo '<tr><th>Nome</th><th>Telefone</th><th colspan="2"></th></tr>';
  foreach($agenda as $p ){
	  $id   = $p["id"];                  
          $nome = $p["nome"];
          $fone = $p["fone"];
          
	  echo "<tr>";
	  echo "<td>" . $nome . "</td>";
	  echo "<td>" . $fone . "</td>";
          // cria link para EXCLUSAO do respectivo id_curso
	  echo '<td><a href="exclusao.php?id='. $id . '">Excluir</a></td>';
	  // cria link para ALTERACAO do respectivo id_curso
	  echo '<td><a href="form_altera_contato.php?id='. $id.'">Alterar</a></td>';
	  
	  echo "</tr>";
  }
?>  
	<br>
	<a href="cadastra_contato.php">Cadastrar novo contato</a>
	</body>
</html>
