
<!DOCTYPE html>
<!-- form_alteracao.html -->
<?php
 $id = $_GET["id"];
 $curso = urldecode($_GET["curso"]);
?>

<html>
	<head>
	  <title>Cadastro de curso</title>
	  <meta charset="utf-8">
	</head>
	<body>
		<h1>Atualizar curso</h1>
		<form action="alteracao_curso.php" 
		      method="GET">
			  
			<input type="hidden" name="id" value="<?php echo $id;?>">
			<label for="ds_curso">
			Curso:
			</label>
			<input type="text" name="curso" id="ds_curso" value="<?php echo $curso;?>">
			<br>
			<input type="submit" value="Ok">
		</form>
	</body>
</html>