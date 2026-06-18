<?
  require_once("animal.php");

  class Réptil extends Animal {
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

    public function locomover(): void {
      echo "<p>O réptil se moveu.</p>";
    }

    public function alimentar(): void {
      echo "<p>O réptil se alimentou.</p>";
    }

    public function emitirSom(): void {
      echo "<p>O réptil emitiu um som.</p>";
    }
  }
?>