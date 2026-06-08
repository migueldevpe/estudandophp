<!DOCTYPE html>
<html lang="pt-BR">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Raiz</title>
</head>
<body>
  <header>
    <h1>Calcular raízes</h1>
  </header>
  <?php 
    $n = $_GET["n"] ?? 0;
  ?>
  <main>
    <form action="<?= $_SERVER["PHP_SELF"] ?>" method="GET" style="display: flex; flex-direction: column; width: fit-content;">
      <div style="display: flex; flex-direction: column;">
        <label for="n">Número:</label>
        <input type="number" name="n" id="n" value="<?= $n ?>" required/>
      </div>
      <input type="submit" value="Calcular" style="flex: 1;">
    </form>
    <div>
      <h2>Resultado final</h2>
      <?= "
        <p>Analisando o <strong>número $n</strong>, temos:</p>
        <ul>
          <li>A raíz <strong>quadrada</strong> é <strong>" . number_format($n ** 2, 3, ",") . "</strong>.</li>
          <li>A raíz <strong>cúbica</strong> é <strong>" . number_format($n ** 3, 3, ",") . "</strong>.</li>
        </ul>
      " ?>
    </div>
  </main>
</body>
</html>