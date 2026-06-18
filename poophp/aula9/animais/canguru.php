<?php 
  require_once("./mamifero.php");

  class Canguru extends Mamífero {
    public function usarBolsa() {
      echo "<p>O canguru usou a bolsa.</p>";
    }

    #[Override]
    public function locomover(): void {
      echo "<p>O canguru está se movendo.</p>";
    }
  }
?>