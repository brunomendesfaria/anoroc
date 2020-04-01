<?php 


class Pessoa { 

    private static int $codigo=0;
    private string  $nome;
    private Endereco $endereco; 
    private CPF $cpf;    

    public function __construct(CPF $cpf, string $nome, Endereco $endereco) 
    {
        $this->cpf = $cpf; 
        $this->validadescricao($nome);
        $this->nome = $nome;
        $this->endereco = $endereco;

        self::$codigo++;
    }

    private function validadescricao(string $nome)   
    {
        if(strlen($nome)<5){
            echo "Nome tem que ter mais de 5 caracteres" .PHP_EOL;
            exit();
        }
    }

    public function getCPF(): string
    {
        return $this->cpf->getCPF();
    }
    
    public function getNome(): string
    {
        return $this->nome;
    }

    public function getEndereco(): Endereco
    {
        return $this->endereco;
    }

    public function getNumero(): int
    {
        return sefl::$codigo;
    }


}