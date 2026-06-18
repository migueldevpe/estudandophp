<?
  require_once("./reptil.php");

  class Tartaruga extends Réptil {
    #[Override]
    public function locomover(): void {
      echo "<p>A tartaruga se moveu.</p>";
    }
  }
?>