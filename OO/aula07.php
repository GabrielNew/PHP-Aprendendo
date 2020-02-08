<?php

abstract class Banco {
    protected $saldo;

    abstract protected function Sacar($saldo);
    abstract protected function Depositar($deposito);
}

class Itau extends Banco {

    public function Sacar($saque) {
        $this->saldo -= $saque;
        echo "Saque de ".$saque."<br>";
    }

    public function Depositar($deposito) {
        $this->saldo += $deposito;
        echo "Deposito de ".$deposito."<br>";
    }
}

$Itau = new Itau();
echo $Itau->Depositar(511);
echo $Itau->Sacar(100);