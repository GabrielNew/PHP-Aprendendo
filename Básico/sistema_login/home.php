<?php
    // conectar ao banco
    require_once("bd.php");

    // Inicia Sessão
    session_start();

    // Dados
    $id = $_SESSION['id_user'];
    $sql = "SELECT * FROM user where ID = '$id'";
    $resultado = mysqli_query($connect, $sql);

    $dados = mysqli_fetch_array($resultado);

    mysqli_close($connect);

    // Verificação
    if (!isset($_SESSION['LOGADO'])) {
        header("location: index.php");
    }
?>

<html>
    <head>
        <title>Logado</title>
    </head>

    <body>
        <h1>Página do Usuário</h1>
        <h3>Olá <?php echo $dados['nome']; ?></h3>
        <br>
        <a href="logout.php">Sair</a>
    </body>
</html>