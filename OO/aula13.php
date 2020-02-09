<?php

class Pessoa {
    public $idade;
}

$pessoaX = new Pessoa();
$pessoaX->idade = 15;

/*
    Dessa maneira, estamos apenas fazendo uma referência ou seja, todas as alterações em $pessoaY
    serão refletidas em na variável $pessoaX;

    $pessoaY = $pessoaX;
*/

// Para clonar um objeto usamos o CLONE

$pessoaY = clone $pessoaX;
$pessoaY->idade = 26;

echo "Idade da Pessoa X = ".$pessoaX->idade;
echo "<br>";
echo "Idade da Pessoa Y = ".$pessoaY->idade;