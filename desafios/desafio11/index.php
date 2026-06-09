<!DOCTYPE html>
<html lang="pt-BR">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Reajuste de preços</title>
  <script src="https://cdn.jsdelivr.net/npm/@tailwindcss/browser@4"></script>
</head>
<body>
  <header>
    <h1 class="[all:revert]">Reajuste de preços</h1>
  </header>
  <?php 
    $porcentagem = $_GET["porcentagem"] ?? 0;
    $preco = $_GET["preco"] ?? 0;

    $valorReajustado = ($preco * ($porcentagem / 100)) + $preco;

    $percentage = numfmt_create("pt-BR", NumberFormatter::PERCENT);
    $padrao = numfmt_create("pt-BR", NumberFormatter::CURRENCY);
  ?>
  <main>
    <section>
      <form action="<?= htmlspecialchars($_SERVER["PHP_SELF"]) ?>" method="get">
        <fieldset class="[all:revert] !flex !flex-col !gap-4 !border !border-black !rounded-md !w-fit">
          <legend class="[all:revert]">Formulário de reajuste de preços</legend>
          <div class="flex flex-col">
            <label for="preco">Preço antes do reajuste</label>
            <input type="number" name="preco" id="preco" class="[all:revert]" value="<?= $preco ?>" required>
          </div>
          <div class="flex flex-col">
            <?= "<label for=\"porcentagem\">Coloque a porcentagem do reajuste. <strong>(<span id=\"valor\">$porcentagem</span>)%</strong></label>" ?>
            <input 
              type="range" 
              name="porcentagem" 
              id="porcentagem"
              value="<?= $porcentagem ?>"
              min="0"
              max="100"  
              step="1"
              oninput="valor.textContent = this.value"
              required
            >
          </div>
          <input type="submit" value="Reajustar" class="[all:revert] !flex-1">
        </fieldset>
      </form>
      <fieldset class="[all:revert] !flex !flex-col !gap-4 !border !border-black !rounded-md !w-fit">
        <legend class="[all:revert]">Resultado</legend>
        <?= "
          <p>O valor de <strong>" . numfmt_format_currency($padrao, $preco, "BRL") . "</strong> com o reajuste de <strong>$porcentagem%</strong> fica <strong>" . numfmt_format_currency($padrao, $valorReajustado, "BRL") . "</strong>.</p>
        " ?>
      </fieldset>
    </section>
  </main>
</body>
</html>