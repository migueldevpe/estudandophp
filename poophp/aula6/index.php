<!DOCTYPE html>
<html lang="pt-BR">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Lutadores</title>
  <link rel="stylesheet" href="style.css">
</head>
<body>
  <?php 
    require_once("lutador.php");
    require_once("luta.php");

    echo "<div style=\"display: flex; flex-direction: column; gap: 1rem;\">";

    $lutador = array(); // <- definindo a varíavel lutador como array

    $lutador[0] = new Lutador("Pretty Boy", 0, "França", "Masculino", 31, 175, 68.9, 11, 2, 1); // <- primeira variável do array, no índice 0 [ 0: Lutador("Pretty Boy", ...), ... ]

    // $lutador[0]->perderLuta();

    // $lutador[0]->apresentar();

    // $lutador[0]->status();

    $lutador[1] = new Lutador("Putscript", 0, "Brasil", "Masculino", 29, 168, 57.8, 14, 2, 3);

    // $lutador[1]->ganharLuta();

    // $lutador[1]->apresentar();

    $lutador[2] = new Lutador("Snapshadow", 0, "EUA", "Masculino", 35, 165, 80.9, 12, 2, 1);

    $lutador[3] = new Lutador("Dead Code", 0, "Austrália", "Masculino", 28, 193, 81.6, 13, 0, 2);

    $lutador[4] = new Lutador("Ufocobol", 0, "Brasil", "Masculino", 37, 170, 119.3, 5, 4, 3); 

    $lutador[5] = new Lutador("Nerdaard", 0, "EUA", "Masculino", 30, 181, 105.7, 12, 2, 4);

    $novaLuta = new Luta();

    $novaLuta->marcarLuta($lutador[0], $lutador[1]);

    $novaLuta->lutar();

    // $prettyBoy = new Lutador("Pretty Boy", 0, "França", 31, 175, 68.9, 11, 2, 1);

    // $prettyBoy->apresentar();

    // $prettyBoy->status();

    // $putScript = new Lutador("Putscript", 0, "Brasil", 29, 168, 57.8, 14, 2, 3);

    // $putScript->apresentar();

    // $snapShadow = new Lutador("Snapshadow", 0, "EUA", 35, 165, 80.9, 12, 2, 1);

    // $snapShadow->apresentar();

    // $deadCode = new Lutador("Dead Code", 0, "Austrália", 28, 193, 81.6, 13, 0, 2);

    // $deadCode->apresentar();

    // $ufocobol = new Lutador("Ufocobol", 0, "Brasil", 37, 170, 119.3, 5, 4, 3); 

    // $ufocobol->apresentar();

    // $nerdAard = new Lutador("Nerdaard", 0, "EUA", 30, 181, 105.7, 12, 2, 4);

    // $nerdAard->apresentar();

    echo "</div>";
  ?>
</body>
</html>