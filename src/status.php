<?php 

class status { 
    private static int $codigo = 0;
    private string $descricao;

    public function __construct(string $descricao)
    {
        $this->descricao = $descricao; 
        self::$codigo++;
    }

    public function getDescricao(): string 
    {
        return $this->descricao;
    }

    public function getCodigo(): int
    {
        return $this->codigo;
    }

}