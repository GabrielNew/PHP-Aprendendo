<?php

// Composição -> Aqui uma classe cria a instância de outra classe.

class Pessoa {

    public function atribuiNome($nome) {
        return "Seu nome é: ".$nome;
    }

}

class Exibe {
    public $pessoa;
    public $nome;

    function __construct($nome) {
        $this->pessoa = new Pessoa(); // Composição trabalha aqui, uma classe instanciando uma outra classa.
        $this->nome = $nome;
    }

    public function exibeNome() {
        echo $this->pessoa->atribuiNome($this->nome);
    }
}

$exibe = new Exibe("Trunks");
$exibe->exibeNome();
