<?php

/*
    Usamos o namespace para evitar conflitos, entre
    classes com nomes iguais, mas em pastas diferentes.
*/

namespace classes;

class Produto {
    public function mostrarDetalhes() {
        echo "Detalhes do Produto da pasta classes";
    }
}