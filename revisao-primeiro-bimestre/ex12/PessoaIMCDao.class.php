<?php
include_once "iDaoModeCrud.interface.php";

class PessoaIMCDao implements iDaoModeCrud {
       
       private $instanciaConexaoPdoAtiva;
       private $tabela;
      
       public function __construct() {
          $this->instanciaConexaoPdoAtiva = PdoConexao::getInstancia();
          $this->tabela = "tb_registro_imc";
       }
       /**
       *
       * create: Insere informações no banco de dados
       *
       * @param object $objeto
       * @return boolean
       */
       public function create( $objeto ) {
          $nome = $objeto->getNome();
          $imc = $objeto->getIMC();
          $situacao = $objeto->getSituacao();
          $sqlStmt = "INSERT INTO {$this->tabela} (DS_NOME, NR_VLR_IMC, DS_SITUACAO) VALUES ( :ds_nome, :nr_vlr_imc, :ds_situacao)";
          try {
             $operacao = $this->instanciaConexaoPdoAtiva->prepare($sqlStmt);
             $operacao->bindValue(":ds_nome", $nome, PDO::PARAM_STR);
             $operacao->bindValue(":nr_vlr_imc", $imc);
             $operacao->bindValue(":ds_situacao", $situacao, PDO::PARAM_STR);
             if($operacao->execute()){
                   if($operacao->rowCount() > 0) {
                      $objeto->setID($this->instanciaConexaoPdoAtiva->lastInsertId());
                      return true;
                   } else {
                      return false;
                   }
                } else {
                   return false;
             }
          } catch( PDOException $excecao ) {
                echo $excecao->getMessage();
          }
       }
       /**
       *
       * read: Retorna um objeto refletindo um contato
       *
       * @param int $id
       * @return object
       */
       public function read( $id ) {
          $sqlStmt = "SELECT * from {$this->tabela} WHERE ID_PESSOA=:id_pessoa";
          try {
             $operacao = $this->instanciaConexaoPdoAtiva->prepare($sqlStmt);
             $operacao->bindValue(":id_pessoa", $id, PDO::PARAM_INT);
             $operacao->execute();
             $getRow = $operacao->fetch(PDO::FETCH_OBJ);
             $nome = $getRow->DS_NOME;
             $imc = $getRow->NR_VLR_IMC;
             $situacao = $getRow->DS_SITUACAO;
             $objeto = new PessoaIMC( $nome, $imc, $situacao );
             $objeto->setId($id);
             return $objeto;
          } catch( PDOException $excecao ){
             echo $excecao->getMessage();
          }
       }
      
       /**
       *
       * update: atualiza um contato
       *
       * @param object $objeto
       * @return boolean
       */
       public function update( $objeto ) {
          $id = $objeto->getId();
          $nome = $objeto->getNome();
          $imc = $objeto->getIMC();
          $situacao = $objeto->getSituacao();
          $sqlStmt = "UPDATE {$this->tabela} SET DS_NOME=:ds_nome, NV_VLR_IMC=:nr_vlr_imc, DS_SITUACAO=:ds_situacao WHERE ID_PESSOA=:id_pessoa";
          try {
             $operacao = $this->instanciaConexaoPdoAtiva->prepare($sqlStmt);
             $operacao->bindValue(":id_pessoa", $id, PDO::PARAM_INT);
             $operacao->bindValue(":ds_nome", $nome, PDO::PARAM_STR);
             $operacao->bindValue(":nr_vlr_imc", $imc, PDO::PARAM_STR);
             $operacao->bindValue(":ds_situacao", $situacao, PDO::PARAM_STR);
             if($operacao->execute()){
                if($operacao->rowCount() > 0){
                   return true;
                } else {
                   return false;
                }
             } else {
                return false;
             }
          } catch ( PDOException $excecao ) {
             echo $excecao->getMessage();
          }
       }
       /**
       *
       * DELETE exclui um contato no banco de dados conforme informado por id
       *
       * @param int $id
       * @return boolean
       */
       public function delete( $id ) {
           $sqlStmt = "DELETE FROM {$this->tabela} WHERE id_pessoa=:id_pessoa";
          try {
             $operacao = $this->instanciaConexaoPdoAtiva->prepare($sqlStmt);
             $operacao->bindValue(":id_pessoa", $id, PDO::PARAM_INT);
             if($operacao->execute()){
                if($operacao->rowCount() > 0) {
                      return true;
                } else {
                      return false;
                }
             } else {
                return false;
             }
          } catch ( PDOException $excecao ) {
             echo $excecao->getMessage();
          }
       }
      

       }
