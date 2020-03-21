<?php 

class Produto { 
    private static int $codigo = 0;
    private string $descricao; 
    private string $unemb; 
    private float $valor=0; 
    private int $qtdEst=0;

    public function __construct (string $descricao, string $unemb)
    {
        $this->validaDescricao($descricao); 
        $this->descricao = $descricao;
        $this->validaUnEmb($unemb);
        $this->embun = $unemb;
        self::$codigo++;
    }

    public function __destruct()
    {
       // self::$numeroDeContas--;
    }

    private function validaDescricao(string $descricao): void 
    { 
        if (strlen($descricao)<3){
            echo "Descrição muito pequena";
            exit;
        }
    }

    private function validaUnEmb(string $unemb):void
    {
        if ((strlen($unemb)>2) && (strlen($unemb)<1)){
            echo "Unidade de embalagem errada"; 
            exit;
        }
    }

    public function atualizarEstoque(int $qtdEst)
    {
        if ($qtdEst<0){
            echo "Sistema não aceita estoque negativo";
            exit();
        }
            $aux = $this->qtdEst - $qtdEst;
            $this->qtdEst = $qtdEst;
    }

    public function atualizarValor(float $valor){
        $this->valor = $valor;
    }

    public static function getCodigo(): int
    {
        return self::$codigo;
    }

    public function getDescricao(): string 
    { 
        return $this->descricao;
    }

    public function getUnEm(): string { 
        return $this->unemb;
    }

    public function getValor(): float { 
        return $this->valor;
    }

    public function getEst(): int { 
        return $this->qtdEst;
    }
}