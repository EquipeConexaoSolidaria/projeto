<?php
    class Instituicao{
        private $nome;
        private $cnpj;
        private $senha;
        private $endereco1;
        private $endereco2;
        private $cidade;
        private $estado;
        private $dias;
        private $horario;
        private $horario2;
        private $horario3;

        public function exibirDados(){
            echo "<br />";
            echo "O nome da ". __CLASS__ ." é ". $this->nome;
            echo "<br />";
            echo "O cnpj da ". __CLASS__ ." é ". $this->cnpj;
            echo "<br />";
            echo "O endereço da ". __CLASS__ ." é ". $this->endereco;
            echo "<br />";
            echo "O endereço da ". __CLASS__ ." é ". $this->endereco2;
            echo "<br />";
            echo "A cidade da ". __CLASS__ ." é ". $this->cidade;
            echo "<br />";
            echo "O estado da ". __CLASS__ ." é ". $this->estado;
            echo "<br />";
            echo "Os dias de atendimento da ". __CLASS__ ." é ". $this->dias;
            echo "<br />";
            echo "Os horarios de atendimentos da ". __CLASS__ ." é ". $this->horario;
            echo "<br />";
            echo "Os horarios de atendimentos da ". __CLASS__ ." é ". $this->horario2;
            echo "<br />";
            echo "Os horarios de atendimentos da ". __CLASS__ ." é ". $this->horario3;
            echo "<br />";
        }

        public function __construct($nome, $cnpj, $senha, $endereco, $endereco2, $cidade, $estado, $dias, $horario, $horario2, $horario3){
            $this->nome = $nome;
            $this->email = $cnpj;
            $this->senha = $senha;
            $this->endereco = $endereco;
            $this->endereco2 = $endereco2;
            $this->cidade = $cidade;
            $this->estado = $estado;
            $this->dias = $dias;
            $this->horario = $horario;
            $this->horario2 = $horario2;
            $this->horario3 = $horario3;
            echo "<br />Instituição Cadastrada...";
        }

        public function setNome($nome){
            $this->nome = $nome;
        }
        
        public function getNome(){
            return $this->nome;
        }

        public function inserirInstituicao()
        {
            $conexao = mysqli_connect("localhost","root","", "circulo");
            if(!$conexao){
                die("Falha na conexão com o BD");
            }
            echo "Conectado com o banco";
            $sql = "INSERT INTO instituicao VALUES ('$this->nome', '$this->email', '$this->senha, $this->endereco, $this->endereco2, $this->cidade, $this->estado, $this->dias, $this->horario, $this->horario2, $this->horario3')";
            if(mysqli_query($conexao, $sql)){
                echo "Instituição adicionada com sucesso";
            }else{
                echo "Erro: ".mysqli_error($conexao);
            }
            mysqli_close($conexao);
        }
        
    }