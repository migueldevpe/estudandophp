<?php 
  require_once("interfaceLutador.php");

  class Lutador implements InterfaceLutador {
    private $nome;
    private $nomePreferencia;
    private $nacionalidade;
    private $sexo;
    private $idade;
    private $altura;
    private $peso;
    private $categoria;
    private $vitorias;
    private $derrotas;
    private $empates;

    public function __construct(
      $nome = "Desconhecido", 
      $nomePreferencia = 0, 
      $nacionalidade = "Desconhecida", 
      $sexo = "Masculino",
      $idade = 18, 
      $altura = 175, 
      $peso = 60, 
      $vitorias = 
      0, $derrotas = 0, 
      $empates = 0
    ) {
      $this->setNome($nome);
      $this->setNomePreferencia($nomePreferencia);
      $this->setNacionalidade($nacionalidade);
      $this->setSexo($sexo);
      $this->setIdade($idade);
      $this->setAltura($altura);
      $this->setPeso($peso);
      $this->setVitorias($vitorias);
      $this->setDerrotas($derrotas);
      $this->setEmpates($empates);
    }

    public function getNome() {
      return $this->nome;
    }

    public function setNome($nome = "") {
      $this->nome = $nome;
    }

    public function getNomePreferencia() {
      return $this->nomePreferencia;
    }

    public function setNomePreferencia($preferencia = 0) {
      $this->nomePreferencia = $preferencia;
    }

    public function getNacionalidade() {
      return $this->nacionalidade;
    }

    public function setNacionalidade($nacionalidade = "") {
      $this->nacionalidade = strtolower($nacionalidade);
    }

    public function getSexo() {
      return $this->sexo;
    }

    public function setSexo($sexo = "Masculino") {
      $this->sexo = strtolower($sexo);
    }

    public function getIdade() {
      return $this->idade;
    }

    public function setIdade($idade = 18) {
      $this->idade = $idade;
    }

    public function getAltura() {
      return $this->altura;
    }

    public function setAltura($altura = 160) {
      $this->altura = $altura;
    }

    public function getPeso() {
      return $this->peso;
    }

    public function setPeso($peso = 0) {
      $this->peso = $peso;
      $this->setCategoria();
    }

    public function getCategoria() {
      return $this->categoria;
    }

    private function setCategoria() {  
      $categoria = (string) "";

      if ($this->getPeso() < 52.2 || $this->getPeso() > 120.2) {
        $categoria = "Inválida";
      } else if ($this->getPeso() <= 70.3) {
        $categoria = "Leve";
      } else if ($this->getPeso() <= 83.9) {
        $categoria = "Médio";
      } else if ($this->getPeso() <= 120.2) {
        $categoria = "Pesado";
      }

      $this->categoria = $categoria;
    }

    public function getVitorias() {
      return $this->vitorias;
    }

    public function setVitorias($vitorias = 0) {
      $this->vitorias = $vitorias;
    }

    public function getDerrotas() {
      return $this->derrotas;
    }

    public function setDerrotas($derrotas = 0) {
      $this->derrotas = $derrotas;
    }

    public function getEmpates() {
      return $this->empates;
    }

    public function setEmpates($empates = 0) {
      $this->empates = $empates;
    }

    public function apresentar() {
      $imagem = "";

      switch ($this->getNacionalidade()) {
        case "brasil":
          $imagem = "outros/brasil.jpg";
          break;
        case "eua":
          $imagem = "outros/eua.jpg";
          break;
        case "austrália":
          $imagem = "outros/australia.jpg";
          break;
        case "frança":
          $imagem = "outros/franca.jpg";
          break;
      };

      echo "
        <div style=\"position: relative; display: flex; flex-direction: column; gap: 1rem; width: fit-content; padding: .5rem; margin: .5rem; border: 1px solid black; border-radius: .75rem; overflow: clip;\">
          <img src=\"$imagem\" loading=\"lazy\" fetchpriority=\"low\" decoding=\"async\" style=\"position: absolute; bottom: 0; left: 50%; translate: -50% 0%; width: 100%; object-fit: cover; z-index: -1;\" > 
          <div style=\"display: flex; flex-direction: column-reverse; gap: .5rem;\">
            <h2 style=\"text-transform: capitalize;\">" . (preg_split("/\s/", $this->getNome())[$this->nomePreferencia]) . "</h2>
            <h3 style=\"align-self: center;\">Apresentação do Lutador</h3> <!-- text-align: center; -->
          </div>
          <ul style=\"padding-left: 1.5rem;\">
            <li style=\"text-transform: capitalize; width: fit-content; padding: 0 .25rem; background-color: #ffffff80; border-radius: .5rem;\">Nome: <strong>{$this->getNome()}</strong></li>
            <li style=\"width: fit-content; padding: 0 .25rem; background-color: #ffffff80; border-radius: .5rem;\">Nacionalidade: <strong style=\"text-transform: uppercase;\">{$this->getNacionalidade()}</strong></li>
            <li style=\"text-transform: capitalize; width: fit-content; padding: 0 .25rem; background-color: #ffffff80; border-radius: .5rem;\">Sexo: <strong>{$this->getSexo()}</strong></li>
            <li style=\"width: fit-content; padding: 0 .25rem; background-color: #ffffff80; border-radius: .5rem;\">Idade: <strong>{$this->getIdade()}</strong></li>
            <li style=\"width: fit-content; padding: 0 .25rem; background-color: #ffffff80; border-radius: .5rem;\">Altura: <strong>" . (number_format($this->getAltura() / 100, 2, ",")) . "m</strong></li>
            <li style=\"width: fit-content; padding: 0 .25rem; background-color: #ffffff80; border-radius: .5rem;\">Peso: <strong>{$this->getPeso()}kg</strong></li>
            <li style=\"width: fit-content; padding: 0 .25rem; background-color: #ffffff80; border-radius: .5rem;\">Categoria: <strong>{$this->getCategoria()}</strong></li>
          </ul>
          <div style=\"display: flex; flex-direction: row; gap: .5rem;\">
            <div style=\"display: flex; align-items: center; flex-direction: column; font-weight: 700; padding: .5rem; background: white; border-radius: .25rem; border: 1px solid green;\">
              <span>{$this->getVitorias()}</span>
              <span style=\"color: green; text-transform: capitalize;\">Vitória" . ($this->getVitorias() > 1 ? "s" : null) . "</span>
            </div>
            <div style=\"display: flex; align-items: center; flex-direction: column; font-weight: 700; padding: .5rem; background: white; border-radius: .25rem; border: 1px solid red;\">
              <span>{$this->getDerrotas()}</span>
              <span style=\"color: red; text-transform: capitalize;\">Derrota" . ($this->getDerrotas() > 1 ? "s" : null) . "</span>
            </div>
            <div style=\"display: flex; align-items: center; flex-direction: column; font-weight: 700; padding: .5rem; background: white; border-radius: .25rem; border: 1px solid gray;\">
              <span>{$this->getEmpates()}</span>
              <span style=\"color: gray; text-transform: capitalize;\">Empate" . ($this->getEmpates() > 1 ? "s" : null) . "</span>
            </div>
          </div>
        </div>
      ";
    }

    public function status() {
      echo "
        <p>O lutador <strong>{$this->getNome()}</strong> é da categoria peso <strong>{$this->getCategoria()}</strong> e venceu <strong>{$this->getVitorias()}</strong> " . ($this->getVitorias() > 1 ? "vezes" : "vez") . ", perdeu <strong>{$this->getDerrotas()}</strong> " . ($this->getDerrotas() > 1 ? "vezes" : "vez") . " e empatou <strong>{$this->getEmpates()}</strong> " . ($this->getEmpates() > 1 ? "vezes" : "vez") . ".</p>
      ";
    }

    public function ganharLuta() {
      $this->setVitorias($this->getVitorias() + 1);
    }

    public function perderLuta() {
      $this->setDerrotas($this->getDerrotas() + 1);
    }

    public function empatarLuta() {
      $this->setEmpates($this->getEmpates() + 1);
    }


  }
?>