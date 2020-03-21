<?php 

class Endereco 
{ 

    private static int $codigo=0;
    private string $logradouro; 
    private string $numero; 
    private string $bairro; 
    private string $estado; 
    private string $pais; 


    public function __construct(string $logradouro, string $numero, string $bairro, string $estado, string $pais) 
    {
       // $this->validaDadosEndereco();
        if (strlen($logradouro)<6){
            echo "Desrição do logradouro setá inválida"; 
            exit(); 
        }        
        $this->logradouro = $logradouro; 

        if(strlen($numero)<1){
            echo "Campo número é obrigatorio";
            exit();
        }
        $this->numero = $numero;

        if (strlen($bairro)<2){
            echo "Descrição do bairro está inválida"; 
            exit(); 
        }
        $this->bairro = $bairro;

        if (strlen($estado)<2){
            echo "Estado está inválido";
            exit();
        }
        $this->estado = $estado;

        if (strlen($pais)<2){
            echo "Pais inválido";
            exit();
        }
        $this->pais = $pais;

        self::$codigo++;
    }

    public function __destruct()
    {
       // self::$numeroDeContas--;
    }
    
    public static function getCodigo():int
    {
		return self::$codigo;
    }

    public function getLogradouro(): string {
        return $this->logradouro;
    }

	public function getNumero(): string {
		return $this->numero;
	}

    public function getBairro(): string 
    {
		return $this->bairro;
	}

    public function getEstado(): string 
    {
		return $this->estado;
	}

    public  function getPais(): string 
    {
		return $this->pais;
	}
}