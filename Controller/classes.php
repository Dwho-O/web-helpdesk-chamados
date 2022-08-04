<?php
    class BancoHelpdesk{
        //atributos
        private $hostname;
        private $username;
        private $password;
        private $database;
        public $conexao;
        //cria os atributos no método construtor para ser usado em outros métodos
        function __construct($hostname, $username, $password, $database){
            $this->hostname = $hostname;
            $this->username = $username;
            $this->password = $password;
            $this->database = $database;
        }

        //cria a conexão com o banco de dados
        public function conexao(){
            try{
                $conexao = new PDO("mysql:host=$this->hostname;dbname=$this->database;", $this->username;$this->password);
                $conexao->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
                $this->conexao->$conexao;
            }catch(PDOException $e){
                echo "Não foi possível estabelecer conexão! Erro: ". $e->getMessage();
            }
        }

        //adiciona usuário no sistema
        public function IncluirUsuario(){
            //abre conexão
            $conexao = $this->conexao;
        }

        //atualiza usuário no sistema
        public function AtualizarUsuario(){
            //abre conexão
            $conexao = $this->conexao;
        }

        //excluir usuário do sistema
        public function ExcluirUsuario(){
            //abre conexão
            $conexao = $this->conexao;
        }

        //consultar usuário do sistema
        public function ConsultarUsuario(){
            //abre conexão
            $conexao = $this->conexao;
        }

        //adicionar chamado no sistema
        public function IncluirChamado(){
            //abre conexão
            $conexao = $this->conexao;
        }

        //atualizar chamado no sistema
        public function AtualizarChamado(){
            //abre conexão
            $conexao = $this->conexao;
        }

        //excluir chamado do sistema
        public function ExcluirChamado(){
            //abre conexão
            $conexao = $this->conexao;
        }

        //consultar chamado do sistema
        public function ConsultarChamado(){
            //abre conexão
            $conexao = $this->conexao;
        }

        public function fechaConexao(){
            $this->conexao = null;
        }
}

?>