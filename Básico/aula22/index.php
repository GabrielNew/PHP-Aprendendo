<!-- 
    Além include, temos include_once(só chama o arquivo uma vez para evitar repetição desnecessária)
    require -> que faz a mesma coisa que o include, a diferença é que caso o arquivo chamado não exista, a função irá parar o script
    require_once -> igual ao include once com o adicional de parar o script caso o arquivo chamado não exista
-->

<!DOCTYPE html>
<head>
    <title>Require e Include</title>
</head>
<body>
    <?php include 'header.php'?>

    <h3>Olá Mundo, eu sou a página index do projeto</h3>

    <?php include 'footer.php'?>
</body>
</html>