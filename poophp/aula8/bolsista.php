<?
  require_once("aluno.php");

  class Bolsista extends Aluno {
    private int $bolsa;

    #[Override]
    public function __construct(string $nome, int $idade, string $sexo, int $matricula = 0, string $curso = "", int $bolsa) {
      parent::__construct($nome, $idade, $sexo, $matricula, $curso);
      $this->setBolsa($bolsa);
    }

    public function getBolsa(): int {
      return $this->bolsa;
    }

    public function setBolsa(int $bolsa): void {
      $this->bolsa = $bolsa;
    }

    public function renovarBolsa(): void {
      echo "<p>Bolsa renovada.</p>";
    }

    #[Override]
    public function pagarMensalidade(): void {
      echo "<p>A matrícula de <strong>{$this->getNome()}</strong> foi paga com desconto na mensalidade. <strong>(Bolsista)</strong></p>";
    }
  }
?>