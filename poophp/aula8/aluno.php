<?
  require_once("pessoa.php");

  class Aluno extends Pessoa {
    private int $matricula;
    private string $curso;

    #[Override]
    public function __construct(string $nome, int $idade, string $sexo, int $matricula, string $curso) {
      $this->setNome($nome);
      $this->setIdade($idade);
      $this->setSexo($sexo);
      $this->setMatricula($matricula);
      $this->setCurso($curso);
    }

    public function getMatricula(): string {
      return $this->matricula;
    }

    public function setMatricula(int $matricula) {
      $this->matricula = $matricula;
    }

    public function getCurso() {
      return $this->curso;
    }

    public function setCurso(string $curso) {
      $this->curso = $curso;
    }

    public function pagarMensalidade(): void {
      $this->setMatricula($this->getMatricula() + 1);
      echo "<p>Mensalidade paga no valor de R$ 1.500,00.</p>";
    }
  }
?>