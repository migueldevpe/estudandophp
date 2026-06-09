<!DOCTYPE html>
<html lang="pt-BR">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Classes</title>
</head>
<body>
  <?php 
    require_once "caneta.php";

    $canetaAzul = new Caneta;
    $canetaAzul -> modelo =  "BIC";
    $canetaAzul -> cor = "Azul";
    $canetaAzul -> ponta = 0.5;
    $canetaAzul -> carga = 90; 
    $canetaAzul -> tampada = true;
    $canetaAzul -> rabiscar();

    echo "<pre>";
    var_dump($canetaAzul);
    echo "</pre>";
  ?>
</body>
</html>