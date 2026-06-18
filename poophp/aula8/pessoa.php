<?
  abstract class Pessoa {
    protected string $nome;
    protected int $idade;
    protected string $sexo;

    public function __construct(string $nome = "", int $idade = 18, string $sexo = "Masculino") {
      $this->setNome($nome);
      $this->setIdade($idade);
      $this->setSexo($sexo);
    }

    public function getNome(): string {
      return $this->nome;
    }

    public function setNome(string $nome): void {
      $this->nome = $nome;
    }

    public function getIdade(): int {
      return $this->idade;
    }

    public function setIdade(int $idade) {
      $this->idade = $idade;
    }

    public function getSexo(): string {
      return $this->sexo;
    }

    public function setSexo(string $sexo) {
      $this->sexo = $sexo;
    }

    public final function fazerAniv(): void {
      $this->setIdade($this->getIdade() + 1);
    }
  }
?>