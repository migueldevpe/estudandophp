<!DOCTYPE html>
<html lang="pt-BR">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Anatomia de uma divisão</title>
</head>
<body>
  <?php 
    $dividendo = $_GET["dividendo"] ?? 4;
    $divisor = $_GET["divisor"] ?? 2;

    $resultado = $dividendo / $divisor;
    $resto = $dividendo % $divisor;
  ?>
  <main>
    <form action="<?= htmlspecialchars($_SERVER["PHP_SELF"]) ?>" method="get"> <!-- O método GET faz com que as informações fiquem na tela, já o POST, é mais escondidinho. O $_SERVER["PHP_SELF"] é um array associativo que busca e pega a informação do ambiente do servidor, essa informação é o link/url da própria página. $_SERVER[] é uma superglobal usada para obter informações do servidor, e a chave "PHP_SELF", retorna o link atual da página. DICA: utilize o htmlspecialchars() para melhor segurança, pois, pode haver brechas para XSS -->
      <fieldset style="display: flex; flex-direction: column; gap: .75rem; width: fit-content; border-radius: .75rem;">
        <legend style="font-size: 1.2rem;">Anatomia de uma divisão</legend>
        <div style="display: flex; flex-direction: column">
          <label for="dividendo">Dividendo:</label>
          <input type="number" name="dividendo" id="dividendo" value="<?= $dividendo ?>" required>
        </div>
        <div style="display: flex; flex-direction: column">
          <label for="divisor">Divisor:</label>
          <input type="number" name="divisor" id="divisor" value="<?= $divisor ?>" required>
        </div>
        <input type="submit" value="Analisar" style="flex: 1">
      </fieldset>
    </form>
    <div style="display: grid; grid-template-columns: 1fr 1fr; margin-top: 1rem; width: fit-content; background-color: gray; border-radius: .75rem;">
      <div style="padding: 3rem; font-size: 2rem; text-align: center;">
        <?= $dividendo ?>
      </div>
      <div style="padding: 3rem; font-size: 2rem; text-align: center; border-left: 2px solid black; border-bottom: 1px solid black;">
        <?=  $divisor ?>
      </div>
      <div style="padding: 3rem; font-size: 2rem; text-align: center; text-decoration: underline;">
        <?= $resto ?>
      </div>
      <div style="padding: 3rem; font-size: 2rem; text-align: center; border-left: 2px solid black; border-top: 1px solid black;">
        <?= number_format($resultado, 3) // o número formatado com 3 casas decimais ?> 
      </div>
    </div>
  </main>
</body>
</html>