<!DOCTYPE html>
<html lang="pt-BR">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Calcular idade</title>
</head>
<body>
  <header>
    <h1>Calculador de idade</h1>
  </header>
  <?php 
    $anoNasc = $_GET["anoNasc"] ?? 0;
    $anoAtual = $_GET["anoAtual"] ?? 2026;
  ?>
  <main>
    <form action="<?= $_SERVER["PHP_SELF"] ?>" method="get" style="display: flex; flex-direction: column; gap: .75rem; width: fit-content;">
      <div style="display: flex; flex-direction: column;">
        <label for="anoNasc">Em que ano você nasceu?</label>
        <input type="number" name="anoNasc" id="anoNasc" value="<?= $anoNasc ?>" required>
      </div>
      <div style="display: flex; flex-direction: column;">
        <label for="anoAtual">Quer saber sua idade em que ano? <?= "<small><strong>(Atualmente estamos em " . date("Y") . ")</strong></small>" ?></label>
        <input type="number" name="anoAtual" id="anoAtual" value="<?= $anoAtual ?>" required>
      </div>
      <input type="submit" value="Calcular" style="flex: 1;">
    </form>
    <div>
      <h1>Resultado:</h1>
      <?= "Quem nasceu em <strong>$anoNasc</strong> vai ter <strong>" . $anoAtual - $anoNasc . "</strong> anos em <strong>$anoAtual</strong>." ?>
    </div>
  </main>
</body>
</html>