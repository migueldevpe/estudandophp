<!DOCTYPE html>
<html lang="pt-BR">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0"> DE
  <title>Teste 2</title>
</head>
<body>
  <?php
    /* 
    <?php  ?> O MAIS USADO DE FORMA GERAL (super tag PHP)
    <? ?>PENDENDO DO CÓDIGO, O PHP NÃO RECONHECE (short open tag)
    <% %> DELIMITAR TAG EM ASP, MAS TEM QUE CONFIGURAR (ASP TAG)
    <?=  ?> GERALMENTE QUANDO TEM APENAS UM ÚNICO COMANDODENTRODATAG (short tag PHP) 
    */
    $nome = "Miguel";
    echo "<h1>Teste $nome</h1>"
  ?>
  <?= "<h2>Teste</h2>" ?>
</body>
</html>