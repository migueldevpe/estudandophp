<?
  require_once("aluno.php");

  class Bolsista extends Aluno {
    private int $bolsa;

    #[Override]
    public function __construct(string $nome, int $idade, string $sexo, int $matricula, string $curso, int $bolsa) {
      $this->setNome($nome);
      $this->setIdade($idade);
      $this->setSexo($sexo);
      $this->setMatricula($matricula);
      $this->setCurso($curso);
      $this->setBolsa($bolsa);
    }

    public function getBolsa(): int {
      return $this->bolsa;
    }

    public function setBolsa(int $bolsa) {
      $this->bolsa = $bolsa;
    }

    public function renovarBolsa() {

    }

    #[Override]
    public function pagarMensalidade(): void {
      $this->setMatricula($this->getMatricula() + 1);
      echo "<p>Mensalidade paga com desconto da bolsa no valor de R$ 770,00.</p>";
    }
  }
?>