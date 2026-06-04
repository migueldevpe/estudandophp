<!DOCTYPE html>
<html lang="pt-BR">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Formatando strings</title>
</head>
<body>
  <?php
    echo "Testando" . " Testado"; // para realizar a junção/soma de textos, não utiliza a vírgula (,) ou símbolo de mais (+), e sim, ponto (.)

    $nome = "X";
    $sobrenome = "Y";

    echo "Olá $nome!"; // com aspas duplas, a string consegue interpretar as variáveis dentro da própria string, como se fosse o `${}` do JS. também interpreta os códigos de emojis (UNICODE), com aspas simples, não interpreta

    echo 'Olá $nome!'; // com aspas simples, não existe intepretação. então, vai a string em literal (Olá $nome!, ao invés de Olá X!)

    echo "<br>". $nome . " " . $sobrenome;

    const ESTADO = "Pernambuco"; // VARIÁVEIS CONSTANTES NÃO SÃO ALTERAVEIS E O NOME DA VARIÁVEL SEMPRE EM CAPSLOCK, PARA MELHOR INTERPRETAÇÃO
    
    echo "<br>Moro em " . ESTADO // JUNÇÃO DE STRINGS/VARIÁVEIS ATRAVÉS DO PONTO (.)
  ?>
</body>
</html>