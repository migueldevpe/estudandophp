<!DOCTYPE html>
<html lang="pt-BR">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Herança de diferença/implementação</title>
</head>
<body>
  <?php 
    require_once("aluno.php");
    require_once("bolsista.php");
    require_once("visitante.php");

    $aluno = new Aluno("Jorge", 18, "Masculino", 0, "TI");

    $bolsista = new Bolsista("João", 18, "Masculino", 0, "TI", 1);

    echo "<pre>";

    $bolsista->pagarMensalidade();

    $aluno->pagarMensalidade();

    var_dump($bolsista);

    var_dump($aluno);

    echo "</pre>";
  ?>
</body>
</html>