    <?php
    class Doacao{
            private $data;
            private $hora;
            private $descricao_item;
            private $status_doacao;
            private $unidade_item;
            private $quantidade_item;

            public function exibirDados(){
                echo "<br />";
                echo "data da doacao ". __CLASS__ . $this->data;
                echo "<br />";
                echo "horario da doacao ". __CLASS__ . $this->hora;
                echo "<br />";
                echo "descricao do item  ". __CLASS__ . $this->descricao_item;
                echo "<br />";
                echo "status da doacao ". __CLASS__ . $this->status_doacao;
                echo "<br />";
                echo "unidade de medida ". __CLASS__ . $this->unidade_item;
                echo "<br />";
                echo "quantidade ". __CLASS__ . $this->quantidade_item;
                echo "<br />";
            }

            public function __construct($data, $hora, $descricao_item, $status_doacao, $unidade_item, $quantidade_item){
                $this->nome = $data;
                $this->email = $hora;
                $this->senha = $descricao_item;
                $this->endereco = $status_doacao;
                $this->endereco2 = $unidade_item;
                $this->cidade = $quantidade_item;
                echo "<br />doacao registrada...";
            }

            public function setData($data){
                $this->data = $data;
            }
            
            public function getData(){
                return $this->data;
            }
            public function setHora($hora){
                $this->hora = $hora;
            }
            
            public function getHora(){
                return $this->hora;
            }
            public function setDescri($descricao_item){
                $this->dadescricao_itemta = $descricao_item;
            }
            
            public function getData(){
                return $this->descricao_item;
            }

            public function inserirInstituicao()
            {
                $conexao = mysqli_connect("localhost","root","", "circulo");
                if(!$conexao){
                    die("Falha na conexão com o BD");
                }
                echo "Conectado com o banco";
                $sql = "INSERT INTO instituicao VALUES (NULL, '$this->nome', '$this->email', '$this->senha, $this->endereco, $this->endereco2, $this->cidade, $this->estado, $this->dias, $this->horario, $this->horario2, $this->horario3')";
                if(mysqli_query($conexao, $sql)){
                    echo "<br />Instituição adicionada com sucesso";
                }else{
                    echo "Erro: ".mysqli_error($conexao);
                }
                mysqli_close($conexao);
            }
            
        }