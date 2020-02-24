<?php

// Associação de Classes

class Pedido {
    public $numero;
    public $cliente;
}

class Cliente {
    public $nome;
    public $endereco;
}

$cliente = new Cliente();
$cliente->nome = "Goku";
$cliente->endereco = "Rua terra, n 500";

$pedido = new Pedido();
$pedido->numero = "123456";
$pedido->cliente = $cliente; // Aqui associamos um pedido e um cliente

$dados = array(
    'numero' => $pedido->numero,
    'nome_cliente' => $pedido->cliente->nome,
    'endereco_cliente' => $pedido->cliente->endereco
);

var_dump($dados);