<?php 

require_once 'src/Endereco.php'; 
//enderecos
$logradouro = "Massao Myashita";
$numero = "151"; 
$bairro="copabana"; 
$estado = "Sao Paulo"; 
$pais = "Brasil"; 

$endereco = new Endereco($logradouro, $numero, $bairro, $estado, $pais);

echo "Cadastro". PHP_EOL; 

echo "Logradouro:"." ".$endereco->getLogradouro() ." ".$endereco->getNumero()." ".$endereco->getBairro()." ".$endereco->getEstado()." ".$endereco->getPais();