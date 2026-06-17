<?
  class Funcionaria extends Pessoa {
    private $setor;
    private $trabalho;

    public function __construct($nome = "", $idade = 0, $sexo = "Masculino", $setor = "N/A", $trabalho = true) {
      $this->setNome($nome);
      $this->setIdade($idade);
      $this->setSexo($sexo);
      $this->setSetor($setor);
      $this->setTrabalho($trabalho);
    }

    public function detalhes() {
      echo "
        <p>
          Nome: {$this->getNome()}. <br>
          Idade: {$this->getIdade()}. <br>
          Sexo: {$this->getSexo()}. <br>
          Setor: {$this->getSetor()}. <br>
          Trabalhando: " . ($this->getTrabalho() ? "Sim" : "Não") . ".
        </p>
      ";
    }

    public function getSetor() {
      return $this->setor;
    }

    public function setSetor($setor = "N/A") {
      $this->setor = $setor;
    }

    public function getTrabalho() {
      return $this->trabalho;
    }

    public function setTrabalho($trabalho = true) {
      $this->trabalho = $trabalho;
    }
 
    public function mudarTrabalho() {
      $this->setTrabalho(!true);
      echo "<p>Trabalho mudado.</p>";
    }
  }
?>