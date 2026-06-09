<!DOCTYPE html>
<html lang="pt-BR">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Caixa Eletrônico</title>
  <script src="https://cdn.jsdelivr.net/npm/@tailwindcss/browser@4"></script>
</head>
<body>
  <header>
    <h1 class="[all:revert] !leading-1">Caixa Eletrônico</h1>
  </header>
  <?php 
    $saque = $_POST["sacar"] ?? 0;

    $resto = $saque;

    $ced100 = floor($resto / 100); // arrendonda par ao menor número
    $resto %= 100;

    $ced50 = floor($resto / 50);
    $resto %= 50;

    $ced20 = floor($resto / 20);
    $resto %= 20;

    $ced10 = floor($resto / 10);
    $resto %= 10;

    $ced5 = floor($resto / 5);
    $resto %= 5;
  ?>
  <main>
    <section>
      <form 
        action="<?= htmlspecialchars($_SERVER["PHP_SELF"]) ?>" 
        method="POST"
      >
        <fieldset class="[all:revert] !flex !flex-col !gap-4 !w-fit !rounded-md">
          <legend class="[all:revert]">Caixa Eletrônico</legend>
          <div class="relative !mt-2 peer-focus:!mt-0">
            <input 
              type="number" 
              name="sacar" 
              id="sacar" 
              class="[all:revert] peer !h-8 !min-w-[300px]" 
              placeholder="" 
              step="5" 
              value="<?= $saque ?>" 
              required
            >
            <label 
              for="sacar" 
              class="peer-focus:text-sm peer-focus:top-0 peer-focus:text-[black] peer-focus:pointer-events-auto peer-not-placeholder-shown:top-0 peer-not-placeholder-shown:text-sm peer-not-placeholder-shown:text-[black] per-not-placeholder-shown:pointer-events-auto absolute top-1/2 -translate-y-1/2 left-2 bg-[white] text-[gray] !px-1 pointer-events-none transition-[top,font-size,color]"
            >
              Informe a quantidade desejada:
            </label>
          </div>
          <input type="submit" value="Sacar" class="[all:revert] !flex-1 !py-2">
        </fieldset>
      </form>
      <fieldset class="[all:revert] !w-fit !rounded-md">
        <legend class="[all:revert]">Resultado:</legend>
        <div>
          <?= 
            "
            <p>Você sacou as seguintes notas:</p>
            <ul class=\"flex flex-col gap-2 !mt-2\">
              <li class=\"flex items-center flex-row gap-2 object-cover max-w-45 \">
                <img 
                  src=\"https://www.moedasdobrasil.com.br/moedas/images/cedulas/R100V.jpg\"
                  loading=\"lazy\"
                  decoding=\"async\"
                  fetchpriority=\"low\"
                />
                <strong>" . $ced100 . "x</strong>
              </li>
              <li class=\"flex items-center flex-row gap-2 object-cover max-w-45 \">
                <img 
                  src=\"https://www.moedasdobrasil.com.br/moedas/images/cedulas/R050V.jpg\"
                  loading=\"lazy\"
                  decoding=\"async\"
                  fetchpriority=\"low\"
                />
                <strong>" . $ced50 . "x</strong>
              </li>
              <li class=\"flex items-center flex-row gap-2 object-cover max-w-45 \">
                <img 
                  src=\"https://www.moedasdobrasil.com.br/moedas/images/cedulas/R00097a.jpg\"
                  loading=\"lazy\"
                  decoding=\"async\"
                  fetchpriority=\"low\"
                />
                <strong>" . $ced20 . "x</strong>
              </li>
              <li class=\"flex items-center flex-row gap-2 object-cover max-w-45 \">
                <img 
                  src=\"https://www.moedasdobrasil.com.br/moedas/images/cedulas/R00096a.jpg\"
                  loading=\"lazy\"
                  decoding=\"async\"
                  fetchpriority=\"low\"
                />
                <strong>" . $ced10 . "x</strong>
              </li>
              <li class=\"flex items-center flex-row gap-2 object-cover max-w-45 \">
                <img 
                  src=\"https://www.moedasdobrasil.com.br/moedas/images/cedulas/C000099P30R.jpg\"
                  loading=\"lazy\"
                  decoding=\"async\"
                  fetchpriority=\"low\"
                />
                <strong>" . $ced5 . "x</strong>
              </li>
            </ul>
            "
          ?>
        </div>
      </fieldset>
    </section>
  </main>
</body>
</html>