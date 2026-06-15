<!DOCTYPE html>
<html lang="pt-BR">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title></title>
</head>
<body>
  <?php 
    require_once("interfaceControle.php");
    require_once("controle.php");

    $control1 = new Controlamento;

    // $control1->ligar();
    // $control1->maisVolume(0);
    $control1->abrirMenu();
  ?>
</body>
</html>