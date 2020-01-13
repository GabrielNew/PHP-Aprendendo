<?php

    session_start();
    require_once 'db.php';


    if (isset($_POST['btn-editar'])) {
        $id = mysqli_escape_string($connect, $_POST['id']);
        $nome = mysqli_escape_string($connect, $_POST['nome']);
        $sobrenome = mysqli_escape_string($connect, $_POST['sobrenome']);
        $email = mysqli_escape_string($connect, $_POST['email']);
        $idade = mysqli_escape_string($connect, $_POST['idade']);

        $sql = "update clientes set nome = '$nome', sobrenome = '$sobrenome', email = '$email', idade = '$idade' where id = '$id'";

        if (mysqli_query($connect, $sql)) {
            $_SESSION['mensagem'] = "Atualizado com Sucesso!";
            header('location: ../index.php');
        } else {
            $_SESSION['mensagem'] = "Ocorreu algum Erro!";
            header('location: ../index.php');
        }
    }
