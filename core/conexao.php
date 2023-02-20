<?php
    class Conexao{
        private $host = 'localhost';
        private $dbname = 'u151171823_formulario';
        private $user = 'u151171823_root';
        private $senha = 'Phpis1234@';
        
        public function conectar(){
            try{
                $conexao = new PDO(
                    "mysql:host=$this->host;dbname=$this->dbname","$this->user","$this->senha"
                );
                return $conexao;
            }catch(PDOException $e){
                echo $e->getMessage();
            }
        }
    }

?>