<?php
    // conectar ao banco
    require_once("bd.php");

    // Inicia Sessão
    session_start();

    if (isset($_POST['logar'])) {
        $erros = [];
        $login = mysqli_escape_string($connect, $_POST['login']);
        $senha = mysqli_escape_string($connect, $_POST['senha']);

        if (empty($login) or empty($senha)) {
            $erros[] = "<li>login/senha precisam ser preenchidos</li>"; 
        } else {
            $sql = "SELECT login from user where login = '$login'";
            $result = mysqli_query($connect, $sql);

            if (mysqli_num_rows($result) > 0) {
                $sql = "SELECT * from user where login = '$login' and senha = '$senha'";
                $result = mysqli_query($connect, $sql);

                if (mysqli_num_rows($result) == 1) {
                    $dados = mysqli_fetch_array($result);
                    mysqli_close($connect);
                    $_SESSION['LOGADO'] = true;
                    $_SESSION['id_user'] = $dados['ID'];
                    header('location: home.php');
                } else {
                    $erros[] = "<li>Usuário/senha inválidos</li>";
                }
            } else {
                $erros[] = "<li>Usuário não existe</li>";
            }
        }
    }
?>

<html>
<body>
    <h1>Login</h1>
    <?php
        if(!empty($erros)){
            foreach($erros as $erro){
                echo "$erro"."<br>";
            }
        }
    ?>

    <hr>
    <form action="<?php echo $_SERVER['PHP_SELF'] ?>" method="post">
        <label>Login:</label>
        <input type="text" name="login"><br>
        <br>
        <label>Senha:</label>
        <input type="password" name="senha"><br>
        <button type="submit" name="logar">Log In</button>
    </form>
</body>
</html>