<?php

require_once 'src/CPF.php';
require_once 'src/Pessoa.php';
require_once 'src/Endereco.php';

$cpf = new CPF("311.739.488-56");

$nome = "Bruno Mendes de Faria";$logradouro = "Massao Myashita";
$numero = "151"; 
$bairro="copabana"; 
$estado = "Sao Paulo"; 
$pais = "Brasil"; 

$endereco = new Endereco($logradouro, $numero, $bairro, $estado, $pais);
$cliente = new Pessoa($cpf,$nome,$endereco); 
var_dump($cliente);
echo $cliente->getCPF();
