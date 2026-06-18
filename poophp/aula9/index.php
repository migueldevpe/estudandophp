<!DOCTYPE html>
<html lang="pt-BR">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Polimorfismo</title>
</head>
<body>
  <?php 
    require_once("ave.php");
    require_once("mamifero.php");
    require_once("peixe.php");
    require_once("reptil.php");
    require_once("animais/arara.php");
    require_once("animais/cachorro.php");
    require_once("animais/canguru.php");
    require_once("animais/cobra.php");
    require_once("animais/goldfish.php");
    require_once("animais/tartaruga.php");

    $ave = new Ave(2, 3, 4, "Azul");

    echo "<pre>";
    var_dump($ave);
    echo "</pre>";

    $ave->fazerNinho();
    $ave->locomover();
    $ave->alimentar();
    $ave->emitirSom();

    $mamifero = new Mamífero(12, 5, 4, "Branco Camurça");

    echo "<pre>";
    var_dump($mamifero);
    echo "</pre>";

    $mamifero->alimentar();
    $mamifero->locomover();
    $mamifero->emitirSom();

    $peixe = new Peixe(1, 1, 0, "Roxo");

    echo "<pre>";
    var_dump($peixe);
    echo "</pre>";

    $peixe->alimentar();
    $peixe->soltarBolha();
    $peixe->locomover();
    $peixe->alimentar();

    $reptil = new Réptil(2, 1, 4, "Verde Goiaba");

    echo "<pre>";
    var_dump($reptil);
    echo "</pre>";

    $reptil->alimentar();
    $reptil->locomover();
    $reptil->emitirSom();

    $arara = new Arara(1, 1, 4, "Vermelho");

    echo "<pre>";
    var_dump($arara);
    echo "</pre>";

    $arara->alimentar();
    $arara->locomover();
    $arara->emitirSom();

    $cachorro = new Cachorro(11, 2, 4, "Galego");

    echo "<pre>";
    var_dump($cachorro);
    echo "</pre>";

    $cachorro->enterrarOsso();
    $cachorro->abanarRabo();
    $cachorro->locomover();
    $cachorro->alimentar();
    $cachorro->emitirSom();

    $canguru = new Canguru(20, 5, 4, "Cinza/Marrom");

    echo "<pre>";
    var_dump($canguru);
    echo "</prev>";

    $canguru->alimentar();
    $canguru->locomover();
    $canguru->emitirSom();
    $canguru->locomover();
    $canguru->usarBolsa();

    $cobra = new Cobra(1, 1, 0, "Verde Goiaba");

    echo "<pre>";
    var_dump($cobra);
    echo "</pre>";

    $cobra->alimentar();
    $cobra->emitirSom();
    $cobra->locomover();

    $goldfish = new GoldFish(1, 1, 0, "Dourado");

    echo "<pre>";
    var_dump($goldfish);
    echo "</pre>";

    $goldfish->locomover();
    $goldfish->alimentar();
    $goldfish->emitirSom();

    $tartaruga = new Tartaruga(3, 11, 4, "Verde Escuro");

    echo "<pre>";
    var_dump($tartaruga);
    echo "</pre>";

    $tartaruga->emitirSom();
    $tartaruga->alimentar();
    $tartaruga->locomover();
  ?>
</body>
</html>