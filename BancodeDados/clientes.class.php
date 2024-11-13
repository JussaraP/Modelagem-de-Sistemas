<?php
// Criação da Classe
// Clientes

class Clientes{
    private $id;
    private $nome;

    public function __construct($id,$nome) {
        $this-> id = $id;
        $this-> nome = $nome;
    }

    public function getId(){
        return $this->id;
    }

    public function setId($id){
        $this->id = $id;

        return $this;
    }
    
    public function getNome(){
        return $this->nome;
    }

    public function setNome($nome){
        $this->nome = $nome;

        return $this;
    }

    function __destruct(){  //cria funcao destrutora do objeto
        echo "Objeto Destruido <br>\n";
    }
}
?>