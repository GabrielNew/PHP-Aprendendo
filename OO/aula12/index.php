<?php

require 'classes/produto.php';
require 'models/produto.php';

// Podemos também definir um apelido para a classe da pasta
use models\Produto as produtoModel; 
use classes\Produto as produtoClasse;

// $p1 = new\classes\Produto(); Essa é uma maneira de chamar qual classe de qual pasta queremos utilizar

$p1 = new produtoClasse; // Essa é outra maneira, que é chamando pelo apelido que colocamos no use
$p2 = new produtoModel;

$p1->mostrarDetalhes();
echo "<br>";
$p2->mostrarDetalhes();