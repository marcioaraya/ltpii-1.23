<?php

 // var_dump($link);
 //   echo 'aqui funcoes.inc.php <br>';

function monta_select_curso(){

  global $link;
  
  // lista cursos já cadastrados
  $query = "SELECT id_curso, ds_curso FROM tb_curso;";
  if ($result = mysqli_query($link, $query)) {
	  echo "<select name=\"id_curso\">";
	  // busca os dados lidos do banco de dados
	  while ($row = mysqli_fetch_assoc($result)) {
		  $id = $row["id_curso"];
		  $curso = $row["ds_curso"];
                   // <option value="1">Anal. Des. Sist</option> 
		  echo "<option value=\"$id\">";
		  echo  $curso . '</option>';
          }
          echo "</select>";
          
	  // libera a área de memória onde está o resultado
	  mysqli_free_result($result);
  }

  }
  
  function monta_select_curso2($id_curso){
  global $link;

  // lista cursos já cadastrados
  $query = "SELECT id_curso, ds_curso FROM tb_curso;";
  if ($result = mysqli_query($link, $query)) {
	  echo "<select name=\"id_curso\">";
	  // busca os dados lidos do banco de dados
	  while ($row = mysqli_fetch_assoc($result)) {
		  $id = $row["id_curso"];
		  $curso = $row["ds_curso"];
                   // <option value="1">Anal. Des. Sist</option> 
                  echo $id_curso." == ".$id." <br>";
                  if ($id_curso == $id) {
                      $selected = 'selected';
                  } else {
                      $selected = '';
                  }
		  echo "<option value=\"$id\" $selected>";
		  echo  $curso . '</option>';
          }
          echo "</select>";
          
	  // libera a área de memória onde está o resultado
	  mysqli_free_result($result);
  }

  }
  
  
  function recupera_aluno($id){


  global $link;
  // lista cursos já cadastrados
  $query = "SELECT id_aluno, ds_aluno, id_curso FROM tb_aluno WHERE id_aluno = $id;";
  if ($result = mysqli_query($link, $query)) {
	 	  // busca os dados lidos do banco de dados
	  while ($row = mysqli_fetch_assoc($result)) {
                return $row;
          }
         
        
	  // libera a área de memória onde está o resultado
	  mysqli_free_result($result);
  }

  }
// monta_select_curso();  
  
  










