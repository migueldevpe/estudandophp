<?
  require_once("animal.php");

  class Mamífero extends Animal {
    private string $corPelo;

    #[Override]
    public function __construct(
      float $peso, 
      int $idade, 
      int $membros, 
      string $corPelo
    ) {
      parent::__construct($peso, $idade, $membros);
      $this->setCorPelo($corPelo);
    }

    public function getCorPelo(): string {
      return $this->corPelo;
    }

    public function setCorPelo(string $corPelo): void {
      $this->corPelo = $corPelo;
    }

    #[Override]
    public function locomover(): void {
      echo "<p>O mamífero se moveu.</p>";
    }

    #[Override]
    public function alimentar(): void {
      echo  "<p>O mamífero se alimentou.</p>";
    }

    #[Override]
    public function emitirSom(): void {
      echo "<p>O mamífero emitiu um som.</p>";
    }
  }
?>