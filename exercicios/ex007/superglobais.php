<!DOCTYPE html>
<html lang="pt-BR">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>
<body>
  <main>
    <pre>
      <?php 
        setcookie("dia-da-semana", "SEGUNDA", time() + 3600); // time() é o tempo atual + 3600 segundos, que é 1 hora

        session_start();
        $_SESSION["teste"] = "FUNCIONOU!";

        echo "<h1>Superglobal GET</h1>";
        var_dump($_GET); // pega apenas o método GET

        echo "<h1>Superglobal POST</h1>";
        var_dump($_POST); // pega apenas o método POST

        echo "<h1>Superglobal REQUEST</h1>";
        var_dump($_REQUEST); // pega tanto o método GET, como o POST

        echo "<h1>Superglobal COOKIE</h1>";
        var_dump($_COOKIE);

        echo "<h1>Superglobal SESSION</h1>";
        var_dump($_SESSION);

        echo "<h1>Superglobal ENV</h1>";
        var_dump($_ENV);

        echo "<h1>Superglobal SERVER</h1>";
        var_dump($_SERVER); // pega as informações gerais do servidor

        echo "<h1>Superglobal GLOBALS</h1>";
        var_dump($GLOBALS); // pega tudo
      ?>
    </pre>
  </main>
</body>
</html>