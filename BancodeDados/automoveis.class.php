<?php
// Criação da Classe
// Automóveis

class Automoveis{
    private $id;
    private $modelo;
    private $preco;
    private $id_automovel;
    
    public function __construct($id,$modelo,$preco,$id_automovel) {
        $this-> id = $id;
        $this-> modelo = $modelo;
        $this-> preco = $preco;
        $this-> id_automovel = $id_automovel;
    }

    public function getId(){
        return $this->id;
    }

    public function setId($id){
        $this->id = $id;

        return $this;
    }
 
    public function getModelo(){
        return $this->modelo;
    }

    public function setModelo($modelo){
        $this->modelo = $modelo;

        return $this;
    }

    public function getPreco(){
        return $this->preco;
    }

    public function setPreco($preco){
        $this->preco = $preco;

        return $this;
    }
 
    public function getId_automovel(){
        return $this->id_automovel;
    }

    public function setId_automovel($id_automovel){
        $this->id_automovel = $id_automovel;

        return $this;
    }

    // Método Create - Inserir um novo automóvel no banco de dados
    public function create() {
        $query = "INSERT INTO automoveis (modelo, preco, id_automovel) VALUES (?, ?, ?)";
        
        if (mysqli_query($this->strconexao, $query)) {
            echo "Automóvel criado com sucesso!<br>";
        } else {
            echo "Erro ao criar automóvel: " . mysqli_error($this->strconexao);
        }
    }

    // Método Read - Ler um automóvel do banco de dados
    public function read() {
        $query = "SELECT * FROM automoveis WHERE id = '?'";
        $result = mysqli_query($this->strconexao, $query);

        if (mysqli_num_rows($result) > 0) {
            $row = mysqli_fetch_assoc($result);
            echo "ID: {$row['id']}<br>Modelo: {$row['modelo']}<br>Preço: {$row['preco']}<br>ID Automóvel: {$row['id_automovel']}<br>";
        } else {
            echo "Automóvel não encontrado.<br>";
        }
    }

    // Método Update - Atualizar um automóvel no banco de dados
    public function update() {
        $query = "UPDATE automoveis SET modelo = ?, preco = ?, id_automovel = ? WHERE id = ?";

        if (mysqli_query($this->strconexao, $query)) {
            echo "Automóvel atualizado com sucesso!<br>";
        } else {
            echo "Erro ao atualizar automóvel: " . mysqli_error($this->strconexao);
        }
    }

    // Método Delete - Deletar um automóvel do banco de dados
    public function delete() {
        $query = "DELETE FROM automoveis WHERE id = ?";

        if (mysqli_query($this->strconexao, $query)) {
            echo "Automóvel excluído com sucesso!<br>";
        } else {
            echo "Erro ao excluir automóvel: " . mysqli_error($this->strconexao);
        }
    }

    function __destruct(){  //cria funcao destrutora do objeto
        echo "Objeto Destruido <br>\n";
    }
}
?>