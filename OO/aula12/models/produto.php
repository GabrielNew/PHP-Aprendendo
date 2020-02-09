<?php

/*
    Usamos o namespace para evitar conflitos, entre
    classes com nomes iguais, mas em pastas diferentes.
*/

namespace models;

class Produto {
    public function mostrarDetalhes() {
        echo "Detalhes do Produto da pasta models";
    }
}