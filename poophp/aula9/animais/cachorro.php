<? 
  require_once("./mamifero.php");

  class Cachorro extends Mamífero {
    public function enterrarOsso() {
      echo "<p>O cachorro enterrou o osso.</p>";
    }

    public function abanarRabo() {
      echo "<p>O cachorro abanou o rabo.</p>";
    }
  }
?>