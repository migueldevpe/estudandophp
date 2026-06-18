<!DOCTYPE html>
<html lang="pt-BR">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Herança de diferença/implementação</title>
</head>
<body>
  <!-- Foi utilizado o extends, public "final" function, abstract class, class final, implements, etc... -->
  <?php 
    require_once("aluno.php");
    require_once("bolsista.php");
    require_once("visitante.php");

    $visitante = new Visitante("Ciclano", 22, "Masculino");

    $aluno = array();

    $aluno[0] = new Aluno("Fulano", 18, "Masculino", 1, "TI");

    $aluno[0]->pagarMensalidade();

    $bolsista = new Bolsista("Fulana", 19, "Feminino", 2, "Enfermagem", 50);

    $bolsista->pagarMensalidade();

    echo "<pre>";

    var_dump($aluno[0]);
    echo "<br/>";
    var_dump($visitante);
    echo "<br/>";
    var_dump($bolsista);

    echo "</pre>";

  ?>
</body>
</html>