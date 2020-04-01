<?php 

class Cliente Extends Pessoa
{
    private static int $codigo=0;
    private string $classificacao; 
    private float $saldo; 
    private string $status; 
    private CPF $cpf;

    public function __construct(CPF $cpf, string $nome, Endereco $endereco )
    {
       $this->cpf = $cpf; 
       $this->nome = $nome;
       $this->endereco = $endereco;

        self::$codigo++;
    }

    public static function getCodigo(): int
    {
        return $this->codigo;
    }

    
    public function getClassificao(): string
    {
        return $this->classicicao;
    }

    
    public function getSaldo(): float
    {
        return $this->saldo;
    }

    
    public function getStatus(): string
    {
        return $this->status;
    }
    
    
    
    
}