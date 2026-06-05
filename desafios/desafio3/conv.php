<!DOCTYPE html>
<html lang="pt-BR">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Desafio 3</title>
</head>
<body>
  <header>
    <h1>Resultado da Conversão de Moedas</h1>
  </header>
  <main>
      <div>
        <?php 
          if (isset($_GET["din"])) {
            $valorEmReais = (float) ($_GET["din"] ?? 0);
            $valorConvertido = (float) ($valorEmReais / 5.16 ?? 0);
            echo "<p style='margin-top: 1rem;'>R$". number_format($valorEmReais, 2)  . " convertido em doláres é: $". number_format($valorConvertido, 2) . ".</p>";
          }
        ?>
      </div>
    </section>
  </main>
</body>
</html>