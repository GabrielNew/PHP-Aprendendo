<?php

class Personagem {
    const NOME = "Vegeta";

    public function exibeNome() {
        echo self::NOME;
    }
}

class outroPersonagem extends Personagem{
    const NOME = "Trunks";

    public function exibeNome() {
        echo self::NOME;
    }

    public function exibeNomePai() {
        echo parent::NOME;
    }
}

$p1 = new Personagem();
$p2 = new outroPersonagem();

echo $p1->exibeNome();
echo "<br>";
echo $p2->exibeNome();
echo "<br>";
echo $p2->exibeNomePai();