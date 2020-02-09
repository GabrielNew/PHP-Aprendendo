<?php

interface Crud {
    public function criar($nome);
    public function ler();
    public function atualizar();
    public function deletar();
}

class Sistema implements Crud {
    // Temos agora que implementar todos os métodos da interface

    public function criar($nome) {
        echo "Criando um Sistema";
    }

    public function ler() {
        echo "Lendo dados de um Sistema";
    }

    public function atualizar() {
        echo "Atualizando Sistema";
    }

    public function deletar() {
        echo "Deletando Sistema";
    }
}