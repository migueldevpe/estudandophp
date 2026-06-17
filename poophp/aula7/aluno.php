<?
  require_once("pessoa.php");

  class Aluno extends Pessoa {
    private $curso;
    private $matricula = true;

    public function __construct($nome = "Testando", $idade = 18, $sexo = "Masculino", $curso = "", $matricula = true) {
      $this->setNome($nome);
      $this->setIdade($idade);
      $this->setSexo($sexo);
      $this->setCurso($curso);
      $this->setMatricula($matricula);
    }

    public function detalhes() {
      echo "<p>Nome: {$this->getNome()} <br> Idade: {$this->getIdade()} <br> Sexo: {$this->getSexo()} <br> Curso: {$this->getCurso()} <br> Matrícula: " . ($this->getMatricula() ? "Sim" : "Não") . "</p>";
    }

    public function getCurso() {
      return $this->curso;
    }

    public function setCurso($curso = "") {
      $this->curso = $curso;
    }

    public function getMatricula() {
      return $this->matricula;
    }

    public function setMatricula($matricula) {
      $this->matricula = $matricula;
    }

    public function cancelarMatricula() {
      $this->setMatricula(!true);
      echo "<p>Matrícula cancelada.</p>";
    }
  }
?>