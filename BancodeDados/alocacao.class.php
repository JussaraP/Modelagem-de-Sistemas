<?php
// Criação da Classe
// Alocação

class Alocacao {
    private $id;
    private $area;
    private $automovel;
    private $concessionaria;
    private $quantidade;
    private $id_automovel;

    // Construtor não recebe mais a conexão
    public function __construct($id, $area, $automovel, $concessionaria, $quantidade, $id_automovel) {
        $this->id = $id;
        $this->area = $area;
        $this->automovel = $automovel;
        $this->concessionaria = $concessionaria;
        $this->quantidade = $quantidade;
        $this->id_automovel = $id_automovel;
    }

    // Getters e Setters (não alterados)
    public function getId() {
        return $this->id;
    }

    public function setId($id) {
        $this->id = $id;
        return $this;
    }

    public function getArea() {
        return $this->area;
    }

    public function setArea($area) {
        $this->area = $area;
        return $this;
    }

    public function getAutomovel() {
        return $this->automovel;
    }

    public function setAutomovel($automovel) {
        $this->automovel = $automovel;
        return $this;
    }

    public function getConcessionaria() {
        return $this->concessionaria;
    }

    public function setConcessionaria($concessionaria) {
        $this->concessionaria = $concessionaria;
        return $this;
    }

    public function getQuantidade() {
        return $this->quantidade;
    }

    public function setQuantidade($quantidade) {
        $this->quantidade = $quantidade;
        return $this;
    }

    public function getId_automovel() {
        return $this->id_automovel;
    }

    public function setId_automovel($id_automovel) {
        $this->id_automovel = $id_automovel;
        return $this;
    }

    public function create() {
        
    }

    public function read() {
        
    }

    // Método Update (Atualizar dados no banco)
    public function update() {
        
    }

    // Método Delete (Excluir dados do banco)
    public function delete() {
        
    }

    function __destruct() {  
        // Destrutor para liberar recursos
        echo "Objeto destruído.<br>";
    }
}
?>
