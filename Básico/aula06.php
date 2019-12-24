<?php
    // Constantes
    define("PI", 3.14);
    define("NOME", "Goku");
    define("TIMES", ['Manchester United', 'Real madrid', 'Juventus']); // Array de Constantes

    echo PI; // Não precisa usar o $ para chamar a variável
    echo "<br>";
    echo NOME;
    echo "<br>";
    echo TIMES[1];
    echo "<br>";
    
    function exibeNome() {
        // Constantes são globais por padrão
        echo NOME;
    }

    exibeNome();
?>