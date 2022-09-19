<?php
    class Doador{
        private $nome;
        private $email;
        private $senha;

        public function exibirDados(){
            echo "<br />";
            echo "O nome do ". __CLASS__ ." é ". $this->nome;
            echo "<br />";
            echo "O email do ". __CLASS__ ." é ". $this->email;
            echo "<br />";
        }

        public function __construct($nome, $email, $senha){
            $this->nome = $nome;
            $this->email = $email;
            $this->senha = $senha;
            echo "<br />Doador Cadastrado...";
        }

        public function setNome($nome){
            $this->nome = $nome;
        }
        
        public function getNome(){
            return $this->nome;
        }

        public function inserirDoador()
        {
            $conexao = mysqli_connect("localhost","root","", "circulo");
            if(!$conexao){
                die("Falha na conexão com o BD");
            }
            echo "Conectado com o banco";
            $sql = "INSERT INTO doador VALUES ('$this->nome', '$this->email', '$this->senha')";
            if(mysqli_query($conexao, $sql)){
                echo "Doador adicionado com sucesso";
            }else{
                echo "Erro: ".mysqli_error($conexao);
            }
            mysqli_close($conexao);
        }
        
    }