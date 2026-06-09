<!DOCTYPE html>
<html lang="pt-BR">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Teste</title>
</head>
<body>
  <?php 
    $numero = (float) 9; // PARA REALIZAR A DEFINIÇÃO/TIPAGEM DE UMA VARIÁVEL, BASTA COLOCAR UM PARENTESES APÓS O RECEBE: $variavel = (float) 9
    var_dump($numero); // var_dump($variavel) SERVE PARA MOSTRAR O TIPO DO ELEMENTO QUE ESTÁ GUARDADO NA VARIÁVEL

    echo "<br>";

    $arr = [0, 1, 2, 3];
    var_dump($arr);

    class Pessoa {
      public string $nome;
    };

    echo "<br>";

    $p = new Pessoa();
    var_dump($p);
  ?>
</body>
</html>