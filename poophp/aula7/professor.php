<? 
  class Professor extends Pessoa {
    private $especialidade;
    private $salario;
    public $padrao;

    public function __construct($nome = "", $idade = 0, $sexo = "Masculino", $especialidade = "N/A", $salario = 1621) {
      $this->setNome($nome);
      $this->setIdade($idade);
      $this->setSexo($sexo);
      $this->setEspecialidade($especialidade);
      $this->setSalario($salario);
      $this->padrao = numfmt_create("pt-BR", NumberFormatter::CURRENCY);
    }

    public function detalhes() {
      echo "<p>Nome: {$this->getNome()} <br> Idade: {$this->getIdade()} <br> Sexo: {$this->getSexo()} <br> Especialidade: {$this->getEspecialidade()} <br> Salário: " . numfmt_format_currency($this->padrao, $this->getSalario(), "BRL") . "</p>";
    }

    public function getEspecialidade() {
      return $this->especialidade;
    }

    public function setEspecialidade($espec = "N/A") {
      $this->especialidade = $espec;
    }

    public function getSalario() {
      return $this->salario;
    }

    public function setSalario($salario = 1621) {
      $this->salario = $salario;
    }

    public function receberAumento() {
      echo "<p>O salário antigo de <strong style=\"text-transform: capitalize;\">{$this->getNome()}</strong> era: <strong>" . numfmt_format_currency($this->padrao, $this->getSalario(), "BRL") . "</strong>. <br>";

      $this->setSalario($this->getSalario() + ($this->getSalario() / 2));
    
      echo "Agora é: <strong>" . numfmt_format_currency($this->padrao, $this->getSalario(), "BRL") . "</strong>.</p>";
    }
  }
?>