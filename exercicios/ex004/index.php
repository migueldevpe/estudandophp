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

    echo "<br>Olá $nome!"; // com aspas duplas, a string consegue interpretar as variáveis dentro da própria string, como se fosse o `${}` do JS. também interpreta os códigos de emojis (UNICODE), com aspas simples, não interpreta

    echo '<br>Olá $nome!'; // com aspas simples, não existe intepretação. então, vai a string em literal (Olá $nome!, ao invés de Olá X!)

    echo "<br>". $nome . " " . $sobrenome;

    const ESTADO = "Pernambuco"; // VARIÁVEIS CONSTANTES NÃO SÃO ALTERAVEIS E O NOME DA VARIÁVEL SEMPRE EM CAPSLOCK, PARA MELHOR INTERPRETAÇÃO
    
    echo "<br>Moro em " . ESTADO; // JUNÇÃO DE STRINGS/VARIÁVEIS ATRAVÉS DO PONTO (.)
  
    echo "<br>Estamos em " . date("Y");

    // echo "<br>$nome " . '"Z"' . " $sobrenome"; AO INVÉS DISSO, FAÇA ISSO LOGO ABAIXO
    echo "<br>$nome \"Z\" $sobrenome"; // PARA COLOCAR UM CARACTERE ESPECIAL, TIPO ASPAS DENTRO DA STRING, SE UTILIZAR A SEQUÊNCIA DE ESCAPE (ESCAPE SEQUENCES), FUNCIONA COM UMA CONTRA BARRA VINDO ANTES DA(O) ASPAS/CARACTERE ESPECIAL (SE FOR ASPAS SIMPLES DENTRO DE UMA STRING COM ASPAS DUPLAS, NÃO NECESSITA DA SEQUÊNCIA DE ESCAPE, APENAS NECESSITA QUANDO FOR IGUAL AO DA STRING).

    // TIPOS DE SEQUÊNCIA DE ESCAPE
    /* 
      \n - Nova linha
      \t - Tabulação horizontal
      \\ - Barra invertida
      \$ - Sinal de cifrão
      \u{} - Codepoint Unicode
    */
  ?>
</body>
</html>