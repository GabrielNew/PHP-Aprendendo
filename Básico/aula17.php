<?php 
  if (isset($_POST['enviar_form'])) {
      $erros = array();
      
      // Tratar os Inputs
      if (!$email = filter_input(INPUT_POST, 'v_email', FILTER_VALIDATE_EMAIL)) {
          $erros[] = "Email Incorreto";
      }

      if (!$idade = filter_input(INPUT_POST, 'v_idade', FILTER_VALIDATE_INT)) {
        $erros[] = "Idade Incorreta";
      }

      if (!$peso = filter_input(INPUT_POST, 'v_peso', FILTER_VALIDATE_FLOAT)) {
        $erros[] = "Peso Incorreto";
      } 

      if (!$url = filter_input(INPUT_POST, 'v_url', FILTER_VALIDATE_URL)) {
        $erros[] = "Site Incorreto";
      }
      // Fim do tratamento dos Inputs

      // Mostrar os erros, caso tenha
      if (!empty($erros)) {
          foreach ($erros as $erro) {
            echo "<li>$erro</li>";
          }
      } else {
          echo "Dados Enviados";
      }
  }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Os Filtros</title>
</head>
<body>
    
    <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post">
        <label>Email</label>
        <input type="text" name="v_email"><br>
        <label>Idade</label>
        <input type="text" name="v_idade"><br>
        <label>Peso</label>
        <input type="text" name="v_peso"><br>
        <label>url</label>
        <input type="text" name="v_url"><br>
        <button type="submit" name="enviar_form">Enviar</button>
    </form>

</body>
</html>