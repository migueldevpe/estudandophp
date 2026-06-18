<?
  require_once("animal.php");

  class Peixe extends Animal {
    private string $corEscama;

    #[Override]
    public function __construct(
      float $peso, 
      int $idade, 
      int $membros, 
      string $corEscama
    ) {
      parent::__construct($peso, $idade, $membros);
      $this->setCorEscama($corEscama);
    }

    public function getCorEscama(): string {
      return $this->corEscama;
    }

    public function setCorEscama(string $corEscama): void {
      $this->corEscama = $corEscama;
    }

    public function soltarBolha(): void {
      echo "<p>O peixe soltou uma bolha.</p>";
    }

    #[Override]
    public function locomover(): void {
      echo "<p>O peixe se moveu.</p>";
    }

    #[Override]
    public function alimentar(): void {
      echo "<p>O peixe se alimentou.</p>";
    }

    #[Override]
    public function emitirSom(): void {
      echo "<p>O peixe emitiu um som.</p>";
    }
  }
?>