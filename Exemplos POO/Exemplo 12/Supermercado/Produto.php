<?php

class Produto
{
    private var $nome;
    private var $preco;
    private var $quantidadeEmEstoque;

    public function getNome()
    {
        return $this->nome;
    }

    public function setNome($nome): void
    {
        $this->nome = $nome;
    }

    public function getPreco()
    {
        return $this->preco;
    }

    public function setPreco($preco): void
    {
        $this->preco = $preco;
    }

    public function getQuantidadeEmEstoque()
    {
        return $this->quantidadeEmEstoque;
    }

    public function setQuantidadeEmEstoque($quantidadeEmEstoque): void
    {
        $this->quantidadeEmEstoque = $quantidadeEmEstoque;
    }

}