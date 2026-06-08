<!DOCTYPE html>
<html lang="pt-BR">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Formulário retroalimentado</title>
</head>
<body>
  <?php 
    $n1 = $_GET["n1"] ?? 0;
    $n2 = $_GET["n2"] ?? 0;
  ?>
  <main>
    <div>
    <h1>Somador</h1>
      <form 
        action="<?= $_SERVER["PHP_SELF"] ?>"
        method="get"
        style="display: flex; flex-direction: column; gap: 1rem; width: fit-content;"
      >
        <div style="display: flex; flex-direction: column;">
          <label for="">Número 1:</label>
          <input type="number" name="n1" id="n1" placeholder="Insira o primeiro número" value="<?= $n1 ?>">
        </div>
        <div style="display: flex; flex-direction: column;">
          <label for="n2">Número 2:</label>
          <input type="number" name="n2" id="n2" placeholder="Insira o segundo número" value="<?= $n2 ?>">
        </div>
        <input type="submit" value="Somar">
      </form>
    </div>
    <div>
      <h1>Resultado</h1>
      <?= "<p>A soma entre <strong>$n1</strong> e <strong>$n2</strong> é: <strong>". $n1 + $n2 ."</strong>.</p>" ?>
    </div>
  </main>
</body>
</html>