<?php

header("Content-Type: text/html; charset=utf-8",true);

include_once "Contato.class.php";
include_once "PdoConexao.class.php";
include_once "DaoContato.class.php";

/*
Esta função __autoload 


function __autoload( $classe ){
if(file_exists( "{$classe}.php" )) {
          include_once "{$classe}.php";
       } else {
          echo "O arquivo {$classe}.php da classe {$classe} não foi encontrado";
       }
    }
  
*/

// Nesta etapa criamos um objeto de contato e logo em seguida vamos fazer destes dados persistentes no banco de dados
$contato1 = new Contato( "Alexandre Barbosa", "teste@teste.com.br", "11999999999");
// Então primeiro criamos um novo objeto DAO
$PersitenciaContato1 = new DaoContato();
/*
echo '<pre>';
var_dump($PersitenciaContato1->readAll());
echo '</pre>';
*/

$contatos = $PersitenciaContato1->readAll();
echo '<table border="1">';
foreach($contatos as $linha){
   echo '<tr>';
   echo "<td>". $linha['ID'] ."</td>";
   echo "<td>". $linha['NOME']." </td>";
   echo "<td>". $linha['EMAIL']." </td>";
   echo "<td>". $linha['TELEFONE']." </td>";
   echo "<td><a href=\"apagar.php?id=". $linha['ID']."\">Apagar</a> </td>";
   
   
   echo '</tr>';
}
echo '</table>';


die();

// Para persistencia de dados do objeto contato, usamos o método create passando o nosso objeto de contato como parâmetro
if($PersitenciaContato1->create($contato1)){
       echo '<p>Inseridos no banco com Êxito</p>';
}

/* Agora podemos testar outra funcionalidade, recuperar os dados persistidos
   no dados no banco para um novo objeto de contatos, usamos o método read do nosso DAO.
   O var_dump está sendo usado apenas para facilitar a visualização do objeto 
   sem precisar inserir mais códigos
*/

var_dump($PersitenciaContato1->read(1));
echo "<hr>";
//Note que poderíamos criar um novo objeto com os dados de contato apenas desta forma:
$contato2 = $PersitenciaContato1->read(1);
// O número 1, indica o ID do registro no banco de dados.
//Agora para atualizar os dados, primeiro "setamos" os novos valores no objeto de contato com os dados carregados. Vamos usar o primeiro objeto identificado como $contato1:
$contato1->setNome("João Silva");
$contato1->setEmail("joao@teste.com.br");
// Então chamamos o método de update do nosso DAO passando o objeto de contato.
if($PersitenciaContato1->update($contato1)){
       echo '<p>Atualizado no banco com Êxito</p>';
}
//Vamos conferir a atualização realizada com o método read do nosso DAO
var_dump($PersitenciaContato1->read(1));
echo "<hr>";
// E para excluirmos? usamos o método delete do nosso DAO, informando o ID como parâmetro
if($PersitenciaContato1->delete(1)){
    echo '<p>Excluído do banco com Êxito</p>';
}
