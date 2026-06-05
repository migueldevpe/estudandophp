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
          $valorEmReais = (float) ($_GET["din"] ?? 0);
          $valorConvertido = (float) ($valorEmReais / 5.16 ?? 0);
          $padrao = numfmt_create("pt-BR", NumberFormatter::CURRENCY);
          // aqui, com o numfmt_create(), se cria a formatação para ser utilizada no numfmt_format_currency(). o primeiro parâmetro de numfmt_create(), é do país (localidade) no qual quero utilizar a moeda, já o segundo parâmetro, indica o que a formatação é para moedas (CURRENCY)

          if (isset($_GET["din"])) {
            echo "<p style='margin-top: 1rem;'><strong>" . numfmt_format_currency($padrao, $valorEmReais, "BRL") . "</strong> convertido em doláres é: <strong>". numfmt_format_currency($padrao, $valorConvertido, "USD") . "</strong>.</p>";
            // aqui no numfmt_format_currency(), é onde vai ser exibido o valor já com a conversão/formatação, onde o primeiro parâmetro do numfmt_format_currency, é o onde coloca o estilo/formatação criado com a  função numfmt_create(), o segundo parâmetro é onde coloca o valor que está prestes a ser formatado, e o terceiro parâmetro, é onde coloca a sigla da moeda que deseja ser utilizada.
          }
        ?>
      </div>
    </section>
  </main>
</body>
</html>

<!--
  if (isset($_GET["din"])) {
    $valorEmReais = (float) ($_GET["din"] ?? 0);
    $valorConvertido = (float) ($valorEmReais / 5.16 ?? 0);
    echo "<p style='margin-top: 1rem;'>R\$". number_format($valorEmReais, 2, ",", ".")  . " convertido em doláres é: US\$". number_format($valorConvertido, 2, ",", ".") . ".</p>";

    // antes, estava em uso o number_format(), para formatar os números, ele funciona assim: number_format(2, ",", "."), o primeiro parâmetro do number_format, é a quantidade de números decimais após a virgula, o segundo parâmetro, serve para formatar o sinal após o primeiro número do milhar, já o terceiro parâmetro, serve para trocar o sinal dos decimais.
  }
-->