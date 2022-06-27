<?php

class Produto
{
    private $nome;
    private $preco;
    private $quantidadeEmEstoque;

    public function getNome()
    {
        return $this->nome;
    }

    public function setNome($nome)
    {
        $this->nome = $nome;
    }

    public function getPreco()
    {
        return $this->preco;
    }

    public function setPreco($preco)
    {
        $this->preco = $preco;
    }

    public function getQuantidadeEmEstoque()
    {
        return $this->quantidadeEmEstoque;
    }

    public function setQuantidadeEmEstoque($quantidadeEmEstoque)
    {
        $this->quantidadeEmEstoque = $quantidadeEmEstoque;
    }
}


