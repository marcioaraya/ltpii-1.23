<?php
class PessoaIMC {
        private $id = null;
        private $nome;
        private $imc;
        private $situacao;
        public function __construct($nome, $imc, $situacao) {
           $this->nome = $nome;
           $this->imc = $imc;
           $this->situacao = $situacao;
        }
        public function getId() {
           return $this->id;
        }
        public function getNome() {
           return $this->nome;
        }
        public function getIMC() {
           return $this->imc;
        }
        public function getSituacao() {
           return $this->situacao;
        }
        public function setId($id) {
           $this->id = $id;
        }
        public function setNome($nome) {
           $this->nome = $nome;
        }
        public function setIMC($imc) {
           $this->imc = $imc;
        }
        public function setSituacao($situacao) {
           $this->situacao = $situacao;
        }
    }
