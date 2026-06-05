<!DOCTYPE html>
<html lang="pt-BR">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Resultado do Desafio 1</title>
  <link rel="stylesheet" href="style.css">
</head>
<body>
  <header>
    <h1>Resultado</h1>
  </header>
  <main>
    <section>
      <div>
        <?php 
          $numInformado = $_GET['num'] ?? 0;
          $antecessor = $numInformado - 1;
          $sucessor = $numInformado + 1;
          echo "
            <fieldset>
              <legend>Resultado do Desafio 1</legend>
              <p>O número informado foi $numInformado.</p>
              <p>O antecessor dele é $antecessor.</p>
              <p>O sucessor dele é $sucessor.</p>
            </fieldset>
          "
        ?>
        <p><a href="javascript:history.go(-1)">Voltar</a></p>
      </div> 
    </section>
  </main>
</body>
</html>