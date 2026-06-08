<?php 
  $num = (string) $_GET["num"]; // nessa varíavel, foi realizado o armazenamento do array associativo $_GET, pegando especialmente a chave "num", por ser um array associativo, não se utiliza () no $_GET para acessar o "num", e sim, colchetes. E foi recebido como tipo String

  $numSeparado = preg_split('/[.,]+/', $num); // aqui, ele vai realizar a separação das Strings em array, por exemplo, foi recebido (30,20) como tem o preg_split(), que separa através de regex, foi inserido o regex '/[.,]+/', que seria ponto ou vírgula, e o valor recebido seria separado assim: ( 30 <- , -> 20) e seria acessível através do índice, como por exemplo: $numSeparado[0] = 30 e $numSeparado[1] = 20.

  // $numSeparado = explode('.', $num); // aqui, também separa através do símbolo, porém, só aceita 1 símbolo no parâmetro, e separa em array também, como no exemplo acima.

  // var_dump($numSeparado);
  
  $numInteiro = (int) $numSeparado[0] ?? 0; // a variável vai guardar o número do índice 0, como inteiro e se não existir, o valor padrão é 0
  $numDecimal = (float) ($numSeparado[1]) ?? 0; // a variável vai guardar o número do índice 1, como real e se não existir, o valor padrão é 0

  // $divisor = 0;

  // if (strlen($numDecimal) === 1) {
  //   $divisor = 10;  
  // } else if (strlen($numDecimal) === 2) {
  //   $divisor = 100;
  // } else if (strlen($numDecimal) === 3) {
  //   $divisor = 1000;
  // }

  // $mostrarNumDecimal = $numDecimal / $divisor;

  $mostrarNumDecimal = $numDecimal / pow(10, strlen($numDecimal)); // pow() é a potência, aí o parâmetro 1, é o número que será feito a potência, e o segundo parâmetro, é o exponenciador, nesse caso, utilizei o strlen(), é tipo: string - length, para contar a quantidade de letras que a string tem, basta colocar a string no parâmetro, aí ela retorna a quantidade de letras na string.

  $decimal = numfmt_create("pt-BR", NumberFormatter::DECIMAL); // criado o estilo padrão como decimal para deixar a formatação do número bonito. PARAM 1: idioma e país, PARAM 2: tipo da formatação (DECIMAL)

  echo "
    <h1 style=\"font-weight: normal;\">O número inserido foi <strong>" . numfmt_format($decimal, $num) . "</strong></h1> // pode ser formatado assim também: number_format($numInteiro, 3, \".\", \",\")

    <ul type=\"circle\">
      <li>
        O número inteiro é <strong>" . numfmt_format($decimal, $numInteiro) . "</strong> // aqui, foi aplicado o estilo/formataão criado(a) inicialmente, denominado como $decimal, no número $numInteiro
      </li>
      <li>
        O número decimal é <strong>" . numfmt_format($decimal, $mostrarNumDecimal) . "</strong> // ou number_format($numDecimal, 0, \",\", \".\"), é praticamente outro estilo de formatação, mais básico, onde, o primeiro parâmetro do number_format() é o número que deseja formatar, o segundo parâmetro, é a quantidade de números que você quer que tenha após a vírgula (casas decimais), o terceiro parâmetro, é o símbolo da unidade das casas decimais, e o quarto parâmetro, é o símbolo da unidade de milhar.
      </li>
    </ul>

    <p><a href=\"javascript:history.go(-1)\">Voltar ao formulário inicial.</a></p>
    // ou <button onclick=\"javascript:history.go(-1)\">Voltar</button>
  "
?>