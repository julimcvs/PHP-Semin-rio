<?php

class Supermercado
{
    private var $pedidos = array();
    private var $produtos = array();

    function cadastrarProduto() {
        $nome = readline("\nInforme o nome do produto: ");
        $preco = readline("\nInforme o preço do produto: ");
        $quantidadeEstoque = readline("\nInforme a quantidade em estoque do produto: ");
        $produto = new Produto();
        $produto -> nome = $nome;
        $produto -> preco = $preco;
        $produto -> quantidadeEmEstoque = $quantidadeEstoque;
        $produto -> id++;
        array_push($this->produtos, $produto);
        echo "\nProduto cadastrado com sucesso!";
    }

    function cadastrarPedido() {
        $this->listarProdutos();
        $chave = -1;
        $pedido = new Pedido();
        while ($chave != 0){
            $chave = readline("\nInforme a chave do produto desejado: (Digite 0 para ir para o próximo passo)");
            $produto = $this->buscarProdutoPelaChave($chave);
            array_push($pedido->produtos, $produto);
            echo "\nProduto cadastrado com sucesso!";
        }
        $tipoPagamento = readline("\nInforme a forma de pagamento: ");
        $pedido->tipoPagamento = $tipoPagamento;
        array_push($this->pedidos, $pedido);
        echo "\nPedido cadastrado com sucesso!";
    }

    private function listarProdutos() {
        print_r($this->produtos);
    }

    private function buscarProdutoPelaChave($chave) {
        if(isset($this->produtos)){
            return $this->produtos[$chave];
        }
    }

    public function getProdutos()
    {
        return $this->produtos;
    }

    public function setProdutos($produtos): void
    {
        $this->produtos = $produtos;
    }

    public function getPedidos()
    {
        return $this->pedidos;
    }

    public function setPedidos($pedidos): void
    {
        $this->pedidos = $pedidos;
    }
}