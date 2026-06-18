<?
  abstract class Animal {
    protected float $peso;
    protected int $idade;
    protected int $membros;

    public function __construct(float $peso, int $idade, int $membros) {
      $this->setPeso($peso);
      $this->setIdade($idade);
      $this->setMembros($membros);
    }

    public function getPeso(): float {
      return $this->peso;
    }

    public function setPeso(float $peso): void {
      $this->peso = $peso;
    }

    public function getIdade(): int {
      return $this->idade;
    }

    public function setIdade(int $idade): void {
      $this->idade = $idade;
    }

    public function getMembros(): int {
      return $this->membros;
    }

    public function setMembros(int $membros): void {
      $this->membros = $membros;
    }

    abstract public function locomover(): void;

    abstract public function alimentar(): void;

    abstract public function emitirSom(): void;
  }
?>