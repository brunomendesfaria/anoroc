<?php

class Venda
{
    private Cliente $cliente; 
    private Produto $produto; 
    private date $data; 
    private static int $codigo=0; 

    public function __construct(Cliente $cliente, Produto $produto)
    {
        $this->cliente = $cliente; 
        $this->produto = $produto;

        self::$codigo ++;

    } 
}