<!DOCTYPE html>
<html lang="pt-BR">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Classes</title>
</head>
<body>
  <?php 
    require_once("caneta.php");

    $c1 = new Caneta; // aqui, a classe foi instaciada, foi utilizado e se tornou um objeto, antes, era apenas a classe (a base, o modelo) de classificação. ela está guardada na varíavel ($c1)
    $c1->modelo = "BIC"; // define o valor do atributo da classe instanciada que virou objeto ($c1), para preencher o atributo de uma nova classe criada, deve-se colocar o nome da classe instanciada (objeto):($c1), depois o "->" e logo em seguida o nome do atributo da classe, depois, basta colocar o receber e o item a ser guardado no atributo.
    $c1->ponta = 0.5;
    $c1->carga = 9;
    $c1->tampada = false;

    $c1->rabiscar(); // aqui, é a chamada do método, é praticamente como se fosse um atributo, mas, você coloca como se fosse literalmente chamando uma função (rabiscar()), tem que ter o parênteses de parâmetros após o nome do método/função.

    echo "<pre>";
    var_dump($c1); // destrincha/mostra a classe instanciada/objeto.
    echo "</pre>";
  ?>
</body>
</html>