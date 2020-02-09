<?php

class Login {
    public static $usuario;

    public static function verificaLogin() {
        echo "O usuário está logado no sistema";
    }

    public static function mostraNome() {
        echo "Nome do Usuário: ".self::$usuario;
    }
}

// Definindo o valor de um atributo estático
Login::$usuario = "Estático";

// Chamando método estático
Login::verificaLogin();
echo "<br>";

Login::mostraNome();
