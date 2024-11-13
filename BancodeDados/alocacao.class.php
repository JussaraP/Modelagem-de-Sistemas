<?php
// Criação da Classe
// Alocação
include_once 'bd.php';
class Alocacao{
    private $id;
    private $area;
    private $automovel;
    private $concessionaria;
    private $quantidade;
    private $id_automovel;

    public function __construct($id,$area,$automovel,$concessionaria,$quantidade,$id_automovel) {
        $this-> id = $id;
        $this-> area = $area;
        $this-> automovel = $automovel;
        $this-> concessionaria = $concessionaria;
        $this-> quantidade = $quantidade;
        $this-> id_automovel = $id_automovel;
    }

    public function getId(){
        return $this->id;
    }

    public function setId($id){
        $this->id = $id;

        return $this;
    }

    public function getArea(){
        return $this->area;
    }

    public function setArea($area){
        $this->area = $area;

        return $this;
    }

    public function getAutomovel(){
        return $this->automovel;
    }

    public function setAutomovel($automovel){
        $this->automovel = $automovel;

        return $this;
    }
 
    public function getConcessionaria(){
        return $this->concessionaria;
    }

    public function setConcessionaria($concessionaria){
        $this->concessionaria = $concessionaria;

        return $this;
    }

    public function getQuantidade(){
        return $this->quantidade;
    }

    public function setQuantidade($quantidade){
        $this->quantidade = $quantidade;

        return $this;
    }

    public function getId_automovel(){
        return $this->id_automovel;
    }

    public function setId_automovel($id_automovel){
        $this->id_automovel = $id_automovel;

        return $this;
    }

    public function create() {
        try {
            $stmt = $this->pdo->prepare("INSERT INTO alocacao (area, automovel, concessionaria, quantidade, id_automovel) VALUES (?, ?, ?, ?, ?)");
            $stmt->execute([$this->area, $this->automovel, $this->concessionaria, $this->quantidade, $this->id_automovel]);
            echo "Alocação criada com sucesso!<br>";
        } catch (PDOException $e) {
            echo "Erro ao criar alocação: " . $e->getMessage();
        }
    }

    // Método Read (Ler dados do banco)
    public function read() {
        try {
            $stmt = $this->pdo->prepare("SELECT * FROM alocacao WHERE id = ?");
            $stmt->execute([$this->id]);
            $result = $stmt->fetch(PDO::FETCH_ASSOC);

            if ($result) {
                echo "ID: {$result['id']}, Área: {$result['area']}, Automóvel: {$result['automovel']}, Concessionária: {$result['concessionaria']}, Quantidade: {$result['quantidade']}, ID Automóvel: {$result['id_automovel']}<br>";
            } else {
                echo "Alocação não encontrada.<br>";
            }
        } catch (PDOException $e) {
            echo "Erro ao ler alocação: " . $e->getMessage();
        }
    }

    // Método Update (Atualizar dados no banco)
    public function update() {
        try {
            $stmt = $this->pdo->prepare("UPDATE alocacao SET area = ?, automovel = ?, concessionaria = ?, quantidade = ?, id_automovel = ? WHERE id = ?");
            $stmt->execute([$this->area, $this->automovel, $this->concessionaria, $this->quantidade, $this->id_automovel, $this->id]);
            echo "Alocação atualizada com sucesso!<br>";
        } catch (PDOException $e) {
            echo "Erro ao atualizar alocação: " . $e->getMessage();
        }
    }

    // Método Delete (Excluir dados do banco)
    public function delete() {
        try {
            $stmt = $this->pdo->prepare("DELETE FROM alocacao WHERE id = ?");
            $stmt->execute([$this->id]);
            echo "Alocação excluída com sucesso!<br>";
        } catch (PDOException $e) {
            echo "Erro ao excluir alocação: " . $e->getMessage();
        }
    }

    function __destruct(){  //cria funcao destrutora do objeto
        echo "Objeto Destruido <br>\n";
    }
}
?>