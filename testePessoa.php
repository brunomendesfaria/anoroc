<?php

require_once 'src/CPF.php';
require_once 'src/Pessoa.php';

$cpf = new CPF('311.739.488-56');
$cliente = new Pessoa($cpf,'Bruno Mendes de Faria'); 
var_dump($cliente);
echo $cliente->getCPF();

