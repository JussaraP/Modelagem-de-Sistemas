<?php
// Criação da Classe
// Concessionária

class Concessionaria{
    private $id;
    private $nome;
    private $id_locacao;
    private $id_cliente;

    public function __construct($id,$nome,$id_locacao,$id_cliente) {
        $this-> id = $id;
        $this-> nome = $nome;
        $this-> id_locacao = $id_locacao;
        $this-> id_cliente = $id_cliente;
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
 
    public function getId_locacao(){
        return $this->id_locacao;
    }

    public function setId_locacao($id_locacao){
        $this->id_locacao = $id_locacao;

        return $this;
    }

    public function getId_cliente(){
        return $this->id_cliente;
    }

    public function setId_cliente($id_cliente){
        $this->id_cliente = $id_cliente;

        return $this;
    }

public function create() {
    
}

public function read() {
    
}


public function update() {
    
}

public function delete() {
    
}

    function __destruct(){  //cria funcao destrutora do objeto
        echo "Objeto Destruido <br>\n";
    }
}
?>