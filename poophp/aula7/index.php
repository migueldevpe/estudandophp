<!DOCTYPE html>
<html lang="pt-BR">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Herança</title>
</head>
<body>
  <?php 
    require_once("pessoa.php");
    require_once("aluno.php");
    require_once("funcionaria.php");
    require_once("professor.php");

    $pessoa = new Pessoa();

    $aluno = new Aluno("Ana", 20, "Feminino", "Enfermagem", true);

    // $aluno->setNome("Teste");
    // $aluno->setIdade(18);
    // $aluno->setSexo("Masculino");
    $aluno->cancelarMatricula();

    $aluno->fazerAniv();

    $aluno->detalhes();
    // var_dump($aluno->getMatricula());

    $professor = new Professor("Jorge", 32, "Masculino", "História", 5000);

    $professor->detalhes();

    $professor->receberAumento();

    var_dump($professor);

    $funcionaria = new Funcionaria("Creuza", 26, "Feminino", "RH", true);

    $funcionaria->mudarTrabalho();

    $funcionaria->detalhes();
  ?>
</body>
</html>