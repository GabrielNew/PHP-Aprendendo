<?php

    session_start();
    require_once 'db.php';

    function Clear($input){
        global $connect;

        $var = mysqli_escape_string($connect, $input);
        $var = htmlspecialchars($var);
        return $var;
    }

    if (isset($_POST['btn-cadastrar'])) {
        $nome = Clear($_POST['nome']);
        $sobrenome = Clear($_POST['sobrenome']);
        $email = Clear($_POST['email']);
        $idade = Clear($_POST['idade']);

        $sql = "insert into clientes (nome, sobrenome, email, idade) values ('$nome', '$sobrenome', '$email', '$idade')";

        if (mysqli_query($connect, $sql)) {
            $_SESSION['mensagem'] = "Cadastrado com Sucesso!";
            header('location: ../index.php');
        } else {
            $_SESSION['mensagem'] = "Ocorreu algum Erro!";
            header('location: ../index.php');
        }
    }
