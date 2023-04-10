<?php 
    require_once ("Database.php");
    class Empregado{
        private $noMatricula;
        private $nome;
        private $sobrenome;
        private $dataNascimento;
        private $dataContratacao;

        public function __set($atributo, $valor) {
            if (property_exists($this, $atributo)) {
                $this->$atributo = $valor;
            }
        }

        public function __get($atributo) {
            if (property_exists($this, $atributo)) {
                return $this->$atributo;
            }
        }


        public function __construct(){
        }

        public function obterTodos(){
            $db = new Database();
            $con = $db->connect();

            $sql = "SELECT * FROM empregado";
            $rs = $con->query($sql);

            $status = $rs->execute();
            $dados = $rs->fetchAll();

            $db->close();
            return $dados;

        }

        public function inserir(){
            $db = new Database();
            $con = $db->connect();

            $sql = "INSERT INTO empregado(no_matricula, nome, sobrenome, data_contratacao, data_nascimento) 
            VALUES ($this->noMatricula, '$this->nome', '$this->sobreNome', '$this->dataContratacao', '$this->dataNascimento')";
            
            $status = $con->exec($sql);

            $db->close();
        }
}