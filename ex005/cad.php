<!DOCTYPE html>
<html lang="pt-BR">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Resultado</title>
  <link rel="stylesheet" href="style.css">
</head>
<body>
  <header>
    <h1>Resultado</h1>
  </header>
  <main>
    <?php 
      //var_dump($_REQUEST) É TODOS EM UM SÓ (POST, GET E COOKIES)

      $nome = $_GET["nome"] ?? "Nome";
      $sobrenome = $_GET["sobrenome"] ?? "Sobrenome";

      echo "<p>Olá $nome $sobrenome, seja bem-vindo!</p>";
    ?>
    <p><a href="javascript:history.go(-1)">Voltar para página de cadastro.</a></p>
  </main>
</body>
</html>