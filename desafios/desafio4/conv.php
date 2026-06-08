<?php 
  $inicio = date("m-d-Y", strtotime("-7 days")); // aqui foi pego as datas para deixar o link sempre atualizado, devido ao strtotime(), que é uma função-parâmetro do date(), onde nele, o tempo foi voltado há 1 semana atrás strtotime("-7days")
  $fim = date("m-d-Y"); // aqui, foi pego a data atual, com a devida formatação do link (mês-dia-ANO)

  $url = 'https://olinda.bcb.gov.br/olinda/servico/PTAX/versao/v1/odata/CotacaoDolarPeriodo(dataInicial=@dataInicial,dataFinalCotacao=@dataFinalCotacao)?@dataInicial=\'' . $inicio . '\'&@dataFinalCotacao=\'' . $fim . '\'&$top=1&$format=json&$select=cotacaoCompra'; // aqui está o link, com a data já inserida corretamente, tendo cuidado com a concatenação, utilizando o ponto, e, as contra barras antes das aspas simples, devido o link possuir o mesmo tipo de aspas nele mesmo. Também, foi utilizado a aspas simples para não interpretação de pequenas partes do link, como o $format, $top, etc.

  $dados = json_decode(file_get_contents($url), true); // aqui, foi criada uma varíavel, onde, ela pega o json (o link), através da função json_decode() e formata para um Array PHP, o json_decode() tem 2 parâmetros cruciais, o primeiro é onde o JSON é inserido, nesse caso, o link, e o segundo, é o de confirmação se é um conjunto de Arrays ou objetos, caso seja verdadeiro, será um conjunto de Arrays. Já o file_get_contents(), tem apenas um parâmetro, onde ele recebe o todo o conteúdo de um arquivo ou link, e transforma em string.

  $cotacaoCompra = $dados["value"][0]["cotacaoCompra"]; // aqui, foi criada uma varíavel para armazenar a cotação, através de todas as etapas anteriores, colocando o caminho para chegar nela, $dados é um array -> chave/array denominado "value" -> índice 0 -> chave "cotacaoCompra", onde guarda o valor da cotação atual.

  $valorInserido = $_GET["din"] ?? 0; // var para pegar o valor do input no formulário, caso não exista (null/undefined), vai ser 0

  $conversao = $valorInserido / $cotacaoCompra;

  $padrao = numfmt_create("pt-BR", NumberFormatter::CURRENCY); // criando o padrão de estilo para a formatação da moeda, utilizando o numfmt_create(), onde existem dois parâmetros, o do idioma-país da moeda ("pt-BR"), e o tipo do formatador do número, que é a moeda (NumberFormatter::CURRENCY).

  echo "<h1>Resultado da Conversão:</h1>";
  echo "<h2 style=\"font-weight: normal\">A cotação atual: <strong>" . numfmt_format_currency($padrao, $cotacaoCompra, "BRL") . "</strong></h2>";
  echo "<p><strong>". numfmt_format_currency($padrao, $valorInserido, "BRL") . "</strong> convertido para dólar atualmente é <strong>" . numfmt_format_currency($padrao, $conversao, "USD") . "</strong>.</p>"; // aqui, foi inserido o número formatado, no tipo MOEDA, através da função numfmt_format_currency(), onde ela recebe 3 parâmetros, o estilo padrão/de referência dela ($padrao), e o que vai ser formatado ($conversao) e por último, o valor da moeda ("USD"/"BRL"/etc)
?>