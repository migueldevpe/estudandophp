<!DOCTYPE html>
<html lang="pt-BR">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Desafio 4</title>
</head>
<body>
  <header>
    <h1>Conversor de Moedas</h1>
  </header>
  <main>
    <section>
      <form method="get" action="conv.php">
        <fieldset style="display: flex; flex-direction: column; width: fit-content;">
          <legend>Conversão</legend>
          <div style="display: flex; flex-direction: column;">
            <label for="din">Informe a quantidade em R$:</label>
            <?php 
              $inicio = date("m-d-Y", strtotime("-7 days"));
              $fim = date("m-d-Y");
              $url = 'https://olinda.bcb.gov.br/olinda/servico/PTAX/versao/v1/odata/CotacaoDolarPeriodo(dataInicial=@dataInicial,dataFinalCotacao=@dataFinalCotacao)?@dataInicial=\''.$inicio.'\'&@dataFinalCotacao=\''.$fim.'\'&$top=1&$orderby=dataHoraCotacao%20desc&$format=json&$select=cotacaoCompra,dataHoraCotacao';
              
              $dados = json_decode(file_get_contents($url), true);

              $cotação = number_format($dados["value"][0]["cotacaoCompra"], 2);

              echo "<input type=\"number\" name=\"din\" id=\"din\" placeholder=\"Valor em reais\" min=\".$cotação.\" step=\"0.01\" required>";
            ?>
          </div>
          <button type="submit">Converter</button>
        </fieldset>
      </form>
    </section>
  </main>
</body>
</html>