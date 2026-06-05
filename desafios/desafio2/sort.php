<!DOCTYPE html>
<html lang="pt-BR">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Sorteador de Números</title>
</head>
<body>
  <header>
    <h1>Sorteador de Números</h1>
  </header>
  <main>
    <section>
      <div>
        <h2>Bem-vindo ao sorteador de números! Clique no botão para gerar um novo número.</h2>
        <?php 
          $numero = rand(0, 100) ?? 0;

          if (isset($_POST['gerar'])) {
            echo "<p>O número gerado é $numero.</p>";
          } else {
            echo "<p>O número gerado é 0.</p>";
          }
        ?>
        <form method="post">
          <button type="submit" name="gerar">Gerar</button>
        </form>
      </div>
    </section>
  </main>
</body>
</html>

<!-- <a href="javascript:document.location.reload()"></a> -->