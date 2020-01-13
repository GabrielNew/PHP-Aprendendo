<?php
    // Aula de Cookies

    setcookie('Usuário', 'Goku', time()+3600);
    setcookie('email', 'goku@gmail.com', time()+3600);
    setcookie('pesquisa', 'Tenis', time()+3600);

    // Para remover um cookie do computador do usuário, basta colocarmos o time negativo
    setcookie('email', 'goku@gmail.com', time()-3600);

    // Ver o valor de um cookie em especial
    echo $_COOKIE['email'];

    // Mostrar todos os valores da superglobal
    var_dump($_COOKIE);
