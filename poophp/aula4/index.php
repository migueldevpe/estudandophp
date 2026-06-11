<!DOCTYPE html>
<html lang="pt-BR">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Conta do Banco</title>
</head>
<body>
  <?php 
    require_once("bankaccount.php");

    $contaJorge = new ContaBanco();

    $contaJorge->abrirConta("Jorge", "CP");

    $contaJorge->depositar(500);

    $contaJorge->sacar(250);

    $contaJorge->pagarMensalidade("Sim");

    $contaJorge->sacar(280);

    $contaJorge->setSaldo(-200);

    $contaJorge->getSaldo();

    $contaJorge->fecharConta("Sim");

    $contaCreuza = new ContaBanco();

    $contaCreuza->abrirConta("Creuza", "CP");

    // var_dump($contaJorge);

    // echo "{$contaJorge->getSaldo()}";
  ?>
</body>
</html>