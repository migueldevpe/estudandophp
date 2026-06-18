<?
  require_once("animal.php");

  class Ave extends Animal {
    private string $corPena;

    #[Override]
    public function __construct(
      float $peso, 
      int $idade, 
      int $membros, 
      string $corPena
    ) {
      parent::__construct($peso, $idade, $membros);
      $this->setCorPena($corPena);
    }

    public function getCorPena(): string {
      return $this->corPena;
    }

    public function setCorPena(string $corPena): void {
      $this->corPena = $corPena;
    }

    public function fazerNinho() {
      echo "<p>A ave fez um ninho.</p>";
    }

    #[Override]
    public function locomover(): void {
      echo "<p>A ave está se movendo.</p>";
    }

    #[Override]
    public function alimentar(): void {
      echo "<p>A ave está se alimentando.</p>";
    }

    #[Override]
    public function emitirSom():void {
      echo "<p>A ave está emitindo som.</p>";
    }
  }
?>