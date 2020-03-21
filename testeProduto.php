<?php 

require_once 'src/Produto.php'; 

$produto = new Produto('Sucrilhos','UN');
$produto->atualizarEstoque(100); 
$produto->atualizarValor(1.99);

echo "Nome Produto:" . "            ". $produto->getDescricao() ."      ". $produto->getEst() ."      ".$produto->getValor(). PHP_EOL;

$produto->atualizarEstoque(0); 

echo "Nome Produto:" . "            ". $produto->getDescricao() ."      ". $produto->getEst() ."      ".$produto->getValor(). PHP_EOL;


