<?
  require_once("pessoa.php");
  class Aluno extends Pessoa {
    private int $matricula;
    private string $curso;

    #[Override]
    public function __construct(string $nome, int $idade, string $sexo,int $matricula = 0, string $curso = "") {
      parent::__construct($nome, $idade, $sexo);
      $this->matricula = $matricula;
      $this->curso = $curso;
    }

    public function getMatricula(): int {
      return $this->matricula;
    }

    public function setMatricula(int $mat): void {
      $this->matricula = $mat;
    }

    public function getCurso(): string {
      return $this->curso;
    }

    public function setCurso(string $curso): void {
      $this->curso = $curso;
    }

    public function pagarMensalidade(): void {
      echo "<p>A matrícula de <strong>{$this->getNome()}</strong> foi paga.</p>";
    }
  }
?>