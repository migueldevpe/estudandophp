<!DOCTYPE html>
<html lang="pt-BR">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Livro</title>
</head>
<body>
  <?php 
    require_once("pessoa.php");
    require_once("livro.php");

    $livros = array();

    $miguel = new Pessoa("Miguel", 19, "Masculino");

    $livros[0] = new Livro("Um diário de um banana", "Jim Kinnifey", 320, $miguel);

    $livros[0]->detalhes();

    $livros[0]->abrir();

    $livros[0]->folhear(1);

    $livros[0]->avançarPag();
    $livros[0]->voltarPag();
    $livros[0]->voltarPag();
    $livros[0]->voltarPag();



  ?>
</body>
</html>