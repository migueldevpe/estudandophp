<?
  require_once("pessoa.php");

  class Professor extends Pessoa {
    private string $especialidade;
    private int $salario;

    public function __construct(string $nome, int $idade, string $sexo, string $especialidade, int $salario) {
      parent::__construct($nome, $idade, $sexo);
      $this->setEspecialidade($especialidade);
      $this->setSalario($salario);
    }

    public function getEspecialidade(): string {
      return $this->especialidade;
    }

    public function setEspecialidade(string $especialidade): void {
      $this->especialidade = $especialidade;
    }

    public function getSalario(): int {
      return $this->salario;
    }

    public function setSalario(int $salario): void {
      $this->salario = $salario;
    }

    public function receberAumento() {

    }
  }
?>