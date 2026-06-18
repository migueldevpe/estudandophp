<?
  require_once("aluno.php");

  class Tecnico extends Aluno {
    private string $registroProfissional;
    
    public function getRegistroProfissional(): string {
      return $this->registroProfissional;
    }

    public function setRegistroProfissional(string $regProf): void {
      $this->registroProfissional = $regProf;
    }

    public function praticar(): void {
      echo "<p>Praticando...</p>";
    }
  }
?>