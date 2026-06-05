<!DOCTYPE html>
<html lang="pt-BR">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Teste</title>
</head>
<body>
  <?php 
    $num = abs(-2000); // NÚMERO ABSOLUTO (SEM SINAIS)

    /*
      ceil() - (teto) arredonda para cima
      floor() - (chão) arredonda para baixo
      round() - arredonda normalmente
      intdiv() - retorna o valor da divisão como inteiro, sem sobrar o resto
      min() - retorna o valor mínimo, ex: min(2, 8) retorna 2
      max() - retorna o valor máximo, ex: max(2, 8) retorna 8
      pi() ou M_PI - 3.14...
      pow() - potência, pique o **, só que sem perder a ordem de precedência, sem precisar utilizar o parenteses para prioridade
      sqrt - retorna a raiz quadrada
    */

    // $n = (int) 8;

    // var_dump($n);

    $r = "5" . "5";
    $n = "5" + "5"; // no PHP, isso funciona, é como se fosse o número em tipo número, ao invés de tipo string, a forma correta de concatenar string em PHP é utilizando o (.)

    echo "$r / $n <br>";

    var_dump($r)
  ?>
</body>
</html>