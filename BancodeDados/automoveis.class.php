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

    function __destruct(){  //cria funcao destrutora do objeto
        echo "Objeto Destruido <br>\n";
    }
}
?>