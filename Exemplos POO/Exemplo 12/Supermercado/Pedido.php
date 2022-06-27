<?php

class Pedido
{
    private $produtos = array();
    private $tipoPagamento;
    private $valor;

    public function getProdutos()
    {
        return $this->produtos;
    }

    public function setProdutos(array $produtos)
    {
        $this->produtos = $produtos;
    }

    public function getTipoPagamento()
    {
        return $this->tipoPagamento;
    }

    public function setTipoPagamento($tipoPagamento)
    {
        $this->tipoPagamento = $tipoPagamento;
    }

    public function getValor()
    {
        $this->valor = 0;
        foreach ($this->produtos as $chave => $v){
            $this->valor += $chave;
        }
        switch ($this->tipoPagamento){
            case "PIX":
            case "CARTAO_DEBITO":
            case "DINHEIRO":
                $this->valor = $this->valor*0.92;
                break;
            case "CARTAO_CREDITO":
                $this->valor = $this->valor;
            case "CHEQUE":
                $this->valor = $this->valor*1.05;
        }
        $this->valor = number_format((float)$this->valor, 2, '.', '');
        echo "<br>Valor a pagar: $this->valor";
    }

    public function setValor($valor)
    {
        $this->valor = $valor;
    }

}