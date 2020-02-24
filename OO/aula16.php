<?php

// Agregação -> É quando uma classe precisa de outra para alguma ação específica

class Produtos {
    public $nome;
    public $valor;

    function __construct($nome, $valor) {
        $this->nome = $nome;
        $this->valor = $valor;
    }
}

class Carrinho {
    public $produtos;

    public function adicionarProduto(Produtos $produto) {
        $this->produtos[] = $produto; 
    }

    public function exibirProdutos() {
        foreach ($this->produtos as $produto) { 
            echo $produto->nome."<br>";
            echo $produto->valor."<hr>";
        }
    }
}

// Aqui criamos os dois produtos para adicionar no carrinho
$produto1 = new Produtos("Caneta", "2.00");
$produto2 = new Produtos("Lápis", "1.00");

$carrinho = new Carrinho();


// Aqui de fato adicionamos os produtos criados, no nosso carrinho
$carrinho->adicionarProduto($produto1);
$carrinho->adicionarProduto($produto2);

$carrinho->exibirProdutos();