<?php

class Supermercado
{
    private $pedidos;
    private $produtos;

    public function __construct()
    {
        $this->pedidos = array();
        $this->produtos = array();
        require_once 'Pedido.php';
        require_once 'Produto.php';
    }


    function cadastrarProduto($produto)
    {
        array_push($this->produtos, $produto);
        $nome = $produto->getNome();
        echo "<br>Produto $nome cadastrado com sucesso!";
    }

    function cadastrarPedido($pedido) {
        array_push($this->pedidos, $pedido);
        echo "<br>Pedido finalizado com sucesso!";
    }

    private function buscarProdutoPelaChave($chave) {
        if(isset($this->produtos)){
            return $this->produtos[$chave];
        }
    }

    public function getPedidos()
    {
        return $this->pedidos;
    }

    public function setPedidos(array $pedidos)
    {
        $this->pedidos = $pedidos;
    }

    public function getProdutos()
    {
        return $this->produtos;
    }

    public function setProdutos(array $produtos)
    {
        $this->produtos = $produtos;
    }

}
