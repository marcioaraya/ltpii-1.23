<!DOCTYPE html>
<!-- form_alteracao.html -->
<?php
 include "../inc/conectabd.inc.php";
 include "../inc/funcoes.inc.php";
 
 $id = $_GET["id"];
 $al = recupera_aluno($id);
?>

<html>
	<head>
	  <title>Cadastro de curso</title>
	  <meta charset="utf-8">
	</head>
	<body>
		<h1>Atualizar curso</h1>
		<form action="alteracao_aluno.php" 
		      method="GET">
                    <input type="hidden" name="id_aluno" value="<?php echo $al["id_aluno"];?>">
			<label for="id_aluno">
			Nome:
			</label>
			<input type="text" name="ds_aluno" id="id_aluno" value="<?php echo $al["ds_aluno"];?>">
			<br>
                        <label for="id_curso">
			Curso:
			</label>
			<?php
                       // var_dump($al)  ;                    
                          monta_select_curso2($al["id_curso"]);
                        ?>
			<br>
			<input type="submit" value="Ok">
		</form>
	</body>
</html>