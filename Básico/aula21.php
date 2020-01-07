<?php
    // Aula de Criptografia

    $senha = "abc123";

    $novaSenha = base64_encode($senha);

    echo $novaSenha."<br>";
    echo "Sua senha é ".base64_decode($novaSenha);
    echo "<hr>";

    echo "Md5: ".md5($senha);
    echo "<hr>";

    echo "Sha1: ". sha1($senha);
    echo "<hr>";

    // MD5 e Sha1 possuem falhas

    $senhaSegura = password_hash($senha, PASSWORD_DEFAULT); // Esse é o modo mais seguro de criptografar uma senha

    echo $senhaSegura;
    echo "<hr>";

    // Para verificarmos a senha com o hash gerado
    if (password_verify($senha, $senhaSegura)) {
        echo "Senha Válida";
    } else {
        echo "Senha Inválida";
    }
