<?php

    /**
    * Description of PdoConexao – Singleton pattern
    *
    * @author Alexandre Bezerra Barbosa
    */
    class PdoConexao {
        private static $instancia;
       
        // Impedir instanciação
        private function __construct() { }
        // Impedir clonar
        private function __clone() { }
       
        //Impedir utilização do Unserialize
        public function __wakeup() { }
       
        /**
        *
        * @return object PDO connection
        *
        */
        public static function getInstancia() {
            if(!isset(self::$instancia)) {
                 try {
                     $dsn = "mysql:host=localhost;dbname=exemplocrud";
                     $usuario = "root";
                     $senha = ""; // Preencha aqui com a senha do seu servidor de banco de dados.
                     
                     // Instânciado um novo objeto PDO informando o DSN e parâmetros de Array
                     self::$instancia = new PDO( $dsn, $usuario, $senha );
                     
                     // Gerando um excessão do tipo PDOException com o código de erro
                     self::$instancia->setAttribute( PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION );
                 
                 } catch ( PDOException $excecao ){
                     echo $excecao->getMessage();
                     // Encerra aplicativo
                     exit();
                 }
             }
             return self::$instancia;
            }
       }
