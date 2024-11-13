<?php
include_once 'alocacao.class.php';
include_once 'automoveis.class.php';
include_once 'clientes.class.php';
include_once 'concessionaria.class.php';

$strconexao = mysqli_connect('localhost','root','','vendaveiculos');

if(!$strconexao){
   die('Nao foi possivel conectar ao banco de dados');
}

$teste = new Alocacao('', 1, "Honda", "hsbjgjh", 5, '');

$teste->create();

?>