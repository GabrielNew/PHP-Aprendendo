<?php
    // Trabalhando com Superglobais

    // $GLOBALS["var"] => Serve para acessar as variáveis do nosso programa, onde elas não estão disponíveis

    $a = $b = 10;

    function soma($x, $y) {
        // se eu tentar acessar as variáveis $a e $b aqui sem usar globals, não irá funcionar
        echo $GLOBALS["a"] + $GLOBALS["b"];
    }

    soma($a, $b);
    echo "<hr>";

    // $_SERVER => É um array que contém informações de cabeçalhos, paths e localizações de script;
    echo $_SERVER['PHP_SELF'];
    echo $_SERVER['SERVER_NAME'];
    echo "<hr>";

    // $_POST => Os dados são enviados de forma invisível
    $nome = $_POST['v_nome'];
    $idade = $_POST['v_idade'];

    echo "Seu nome é $nome e sua idade é $idade <br>";

    // $_GET => Os dados são passados pela URL, portanto ficam visíveis
    $jogo = $_GET['v_jogo'];
    $console = $_GET['v_console'];

    echo "Seu jogo favorito é $jogo e seu console favorito é $console <br>";
