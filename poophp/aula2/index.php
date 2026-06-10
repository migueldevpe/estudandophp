<!DOCTYPE html>
<html lang="pt-BR">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Visibilidade de classes/atributos</title>
</head>
<body>
  <?php 
    require_once("carro.php");

    $carro1 = new Carro;
    $carro1->modelo = "Onix";
    $carro1->marca = "Chevrolet";
    $carro1->ano = 2022;
    $carro1->cor = "Prata";
    $carro1->trancado = false;
    $carro1->ligado = false;
    $carro1->acelerando = true;
    $carro1->freiando = false;

    $carro1->mostrarInfo();
    $carro1->trancar();
    $carro1->desligar();
    $carro1->acelerar();
    $carro1->freiar();
    // $carro1->ligar();
    // $carro1->destrancar();
  ?>
</body>
</html>