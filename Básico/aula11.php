<?php

$var = " ";

if ($var) {
    echo "Var vale true\n";
} elseif ($var == false) {
    echo "Var vale false\n";
} else {
    echo "Var Inválida\n";
}

echo "<br>";

/* Uma outra maneira de fazer a condicional, sem usar chaves
if ($var):
    echo "Var vale true\n";
elseif (condição):
    echo "Var vale false\n";
else:
    echo "Var Inválida\n";
endif;
*/

// Condicional Ternária

$media = 10.0;

echo ($media >= 6) ? "Aprovado" : "Reprovado";

