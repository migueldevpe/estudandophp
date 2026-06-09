<!DOCTYPE html>
<html lang="pt-BR">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Médias</title>
  <script src="https://cdn.jsdelivr.net/npm/@tailwindcss/browser@4"></script>
</head>
<body>
  <header>
    <h1 class="font-bold text-2xl">Médias</h1>
  </header>
  <?php 
    $valor1 = (int) ($_GET["v1"] ?? 0);
    $peso1 = (int) ($_GET["p1"] ?? 1);

    $valor2 = (int) ($_GET["v2"] ?? 0);
    $peso2 = (int) ($_GET["p2"] ?? 1);

    $media = ($valor1 + $valor2) / 2;
    
    $somaDosPesos = $peso1 + $peso2;

    $mediaPonderada = 0;

    if ($somaDosPesos != 0) {
      $mediaPonderada = (float) (($valor1 * $peso1) + ($valor2 * $peso2)) / $somaDosPesos;
    } 

  ?>
  <main>
    <section>
      <form action="<?= $_SERVER["PHP_SELF"] ?>" method="get" class="w-fit">
        <fieldset class="!flex !flex-col !gap-4 [all:revert] !rounded-md">
          <legend class="[all:revert]">Calculador de médias</legend>
          <div class="flex flex-col">
            <label for="v1">Valor 1:</label>
            <input type="number" name="v1" id="v1" class="[all:revert]" value="<?= $valor1 ?>" required>
          </div>
          <div class="flex flex-col">
            <label for="p1">Peso 1:</label>
            <input type="number" name="p1" id="p1" class="[all:revert]" value="<?= $peso1 ?>">
          </div>
          <div class="flex flex-col">
            <label for="v2">Valor 2:</label>
            <input type="number" name="v2" id="v2" class="[all:revert]" value="<?= $valor2 ?>" required>
          </div>
          <div class="flex flex-col">
            <label for="p2">Peso 2:</label>
            <input type="number" name="p2" id="p2" class="[all:revert]" value="<?= $peso2 ?>">
          </div>
          <input type="submit" value="Calcular médias" class="flex-[1] [all:revert]">
        </fieldset>
      </form>
      <fieldset class="[all:revert] !flex !flex-col !w-fit !rounded-md">
        <legend class="[all:revert]">Resultado das médias</legend>
        <?=  "
          <p>Aqui está o resultado da <strong>média</strong>: <strong>" . number_format($media, 2, ",", ".") . "</strong>.</p>
          <p>Aqui está o resultado da <strong>média ponderada</strong>: <strong>" . number_format($mediaPonderada, 2, ",", ".") . "</strong>.</p>
        " ?>
      </fieldset>
    </section>
  </main>
</body>
</html>