<?php
  $inicio = date("m-d-Y", strtotime("-7 days")); // após pegar a data, com o mesmo estilo do link (m-d-Y), foi colocado um segundo parâmetro para voltar atrás, a função strtotime quer dizer: string para o tempo, e no parâmetro dessa função, foi colocado o necessário para voltar no tempo: "-7 days"
  $fim = date("m-d-Y");
  $url = 'https://olinda.bcb.gov.br/olinda/servico/PTAX/versao/v1/odata/CotacaoDolarPeriodo(dataInicial=@dataInicial,dataFinalCotacao=@dataFinalCotacao)?@dataInicial=\''.$inicio.'\'&@dataFinalCotacao=\''.$fim.'\'&$top=1&$orderby=dataHoraCotacao%20desc&$format=json&$select=cotacaoCompra,dataHoraCotacao'; // utilizado a aspas simples para não ter algum conflito entre os $top com alguma variável e feito a concatenação para colocar o tempo atual.

  $dados = json_decode(file_get_contents($url), true); // aqui, é realizado a captura dos dados, mas, antes, tem que transformar o JSON para Array PHP, atravésdo json_decode(), o json_decode() recebe 2 parâmetros, geralmente o JSON, e o segundo parâmetro é booleano, onde, se estiver verdadeiro (true), quer dizer que vai converter para Array PHP literalmente em Array, caso falso (false), retorna um Array de Objetos.

  $valorInformado = $_GET["din"] ?? 0;

  $cotação = $dados["value"][0]["cotacaoCompra"]; // aqui, para melhor visualização, utilizei o var_dump($dados), para ver o Array PHP convertido do JSON, e definir o caminho correto, que é do acesso VALUE, do índice 0, para o acesso COTACAOCOMPRA

  $padrao = numfmt_create("pt-BR", NumberFormatter::CURRENCY);

  $conversao = $valorInformado / $cotação;

  echo "
    <header>
      <h1>Resultado da Conversão</h1>
    </header>
    <main>
      <section>
        <p>A cotação atual é: <strong>" . numfmt_format_currency($padrao, $cotação, "BRL") . "</strong></p>
        <p><strong>" . numfmt_format_currency($padrao, $valorInformado, "BRL") . "</strong> convertido para dólares é: <strong>" . numfmt_format_currency($padrao, $conversao, "USD") . "</strong>.</p>
      </section>
    </main>
  ";
?>