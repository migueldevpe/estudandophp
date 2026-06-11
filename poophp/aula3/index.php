<!DOCTYPE html>
<html lang="pt-BR">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Métodos especiais</title>
</head>
<body>
  <?php 
    require_once("class.php");

    $carro1 = new Carro("Onix", "Chevrolet", 2026);

    echo "<pre>";
    var_dump($carro1);
    echo "</pre>";

    echo "Veículo: {$carro1->getMarca()} {$carro1->getModelo()} {$carro1->getAno()}."
  ?>
</body>
</html>