<!DOCTYPE html>
<html lang="pt-BR">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Calculadora de tempo</title>
  <script src="https://cdn.jsdelivr.net/npm/@tailwindcss/browser@4"></script>
</head>
<body>
  <header>
    <h1 class="[all:revert] !leading-1">Calculadora de tempo</h1>
  </header>
  <?php 
    $total = (int) ($_POST["segundos"] ?? 0);
    $sobra = $total;

    $semanas = (int) ($sobra / 604800);
    $sobra = $sobra % 604800;

    $dias = (int) ($sobra / 86400);
    $sobra = $sobra % 86400;

    $horas = (int) ($sobra / 3600);
    $sobra = $sobra % 3600;
    
    $minutos = (int) ($sobra / 60);
    $sobra = $sobra % 60;

    $segundos = $sobra;
  ?>
  <main>
    <section>
      <form 
        action="<?= $_SERVER["PHP_SELF"] ?>" 
        method="POST"
      >
        <fieldset class="[all:revert] !flex !flex-col !gap-4 !w-fit !rounded-md">
          <legend class="[all:revert]">
            Calcular o tempo
          </legend>
          <div class="relative flex flex-col !mt-2">
            <input 
              type="number" 
              name="segundos" 
              id="segundos" 
              value="" 
              class="peer [all:revert] !h-8 !min-w-[300px] !rounded-md"
            >
            <label 
              for="segundos" 
              class="peer-focus:text-sm peer-focus:top-0 peer-focus:pointer-events-auto peer-focus:text-[black] absolute top-1/2 -translate-y-1/2 left-2 pointer-events-none bg-white text-[gray] !px-1 rounded-md whitespace-nowrap !z-1 transition-[top,font-size,color] duration-300 ease-in-out"
            >
              Qual é o total de segundos?
            </label>
          </div>
          <input type="submit" value="Calcular" class="[all:revert] !flex-1">
        </fieldset>
      </form>
      <h1 class="[all:revert] !leading-1">Totalizando</h1>
      <fieldset class="[all:revert] !w-fit !rounded-md">
        <legend>Resultados</legend>
        <div>
          <?= 
            "
            <p><strong>$total</strong> segundos equivalem a um total de:</p>
            <ul type=\"\" class=\"[all:revert]\">
              <li><strong>$semanas</strong> semana" . ($semanas > 1 ? "s" : "") . ";</li>
              <li><strong>$dias</strong> dia" . ($dias > 1 ? "s" : "") . ";</li>
              <li><strong>$horas</strong> hora" . ($horas > 1 ? "s" : "") . ";</li>
              <li><strong>$minutos</strong> minuto" . ($minutos > 1 ? "s" : "") . ";</li>
              <li><strong>$segundos</strong> segundo" . ($segundos > 1 ? "s" : "") . ";</li>
            </ul>
            "
          ?>
        </div>
      </fieldset>
    </section>
  </main>
</body>
</html>