<?php
    // Algumas funções para as strings

    // strtoupper() => Deixar tudo maiúsculo
    $nome = "Soldado Invernal";
    $nome_mai = strtoupper($nome);
    echo "$nome_mai"."</p>";

    // strtolower() => Deixar tudo minúsculo
    $nome = "IRON MAN";
    $nome_mini = strtolower($nome);
    echo "$nome_mini"."</p>";

    // substr() => Recortar a mensagem passando o ponto inicial e opcionalmente o final
    $nome = "Capitao América";
    $recorte = substr($nome, 7, 9);
    echo "$recorte"."</p>";

    // str_pad() => Serve para alterarmos a estrutura de uma string
    $nome = "Homem Formiga";
    $altera = str_pad($nome, 15, "!", STR_PAD_BOTH);
    echo "$altera"."</p>";

    // str_repeat() => Repetir uma string uma determinada quantidade de vezes
    echo str_repeat("I'm Groot ", 5);

    echo "</p>";

    // strlen() => Retorna a quantidade de caracteres de uma string
    $nome = "Arqueiro";
    echo strlen($nome);

    echo "</p>";

    // str_replace => Subistituir uma palavra em um texto
    $mensagem = "A DC tem os melhores filmes!";
    $novaMsg = str_replace("DC", "Marvel", $mensagem);
    echo "$novaMsg";
    
    echo "</p>";

    // strpos() => Serve para falar a posição de uma determinada string
    echo strpos($novaMsg, "filme");