<!DOCTYPE html>
<html lang="pt-BR">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Calculador de salários</title>
</head>
<body>
  <header>
    <h1>Calculador de salários</h1>
  </header>
  <?php 
    $salarioInserido = $_GET["salario"] ?? 0;
    $salarioMinimo = 1612;

    $qntdSalarios = intdiv($salarioInserido, $salarioMinimo);
    $restoSalarios = $salarioInserido % $salarioMinimo;

    $padrao = numfmt_create("pt-BR", NumberFormatter::CURRENCY)
  ?>
  <main>
    <form method="get" action="<?= htmlspecialchars($_SERVER["PHP_SELF"]) ?>" style="display: flex; flex-direction: column; gap: .75rem; width: fit-content;">
      <div style="display: flex; flex-direction: column;">
        <label for="salario">Informe o seu salário:</label>
        <input type="number" name="salario" id="salario">
      </div>
      <input type="submit" value="Calcular" style="flex: 1;">
    </form>
    <div>
      <?= "
        <p>O salário mínimo atual é: <strong>" . numfmt_format_currency($padrao, $salarioMinimo, "BRL") . "</strong>.</p>
        <p>Quem recebe um salário de <strong>" . numfmt_format_currency($padrao, $salarioInserido, "BRL") . "</strong> recebe $qntdSalarios salários mínimos + <strong>" . numfmt_format_currency($padrao, $restoSalarios, "BRL") . "</strong>.</p>
      "?>
    </div>
  </main>
</body>
</html>