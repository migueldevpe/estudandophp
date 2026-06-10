<?php 
  class Carro {
    public $modelo; // agora, não precisa colocar o var antes do nome do atributo, basta colocar a visibilidade, nos métodos também, existem essas visibilidades: public, private e protected. a public, é quando ela pode ser acessada/alterada em qualquer outro lugar (quando instanciar, outra classe, sendo distinta ou filha, etc) a private ela consegue ser acessada de formas específicas (não vi ainda) e a protected, pode ser acessada/alterada apenas pela classe mãe e filhas.
    public $marca;
    public $ano;
    public $cor;
    public $ligado;
    public $trancado;
    public $acelerando;
    public $freiando;
    
    public function trancar() {
      if ($this->trancado === true) {
        echo "\n<p>O $this->marca $this->modelo já está trancado.</p>";
      } else {
        echo "\n<p>O $this->marca $this->modelo foi trancado.</p>";
      }
    }

    public function destrancar() {
      if ($this->trancado === false) {
        echo "\n<p>O $this->marca $this->modelo já está destrancado.</p>";
      } else {
        echo "\n<p>O $this->marca $this->modelo foi destrancado.</p>";
      }
    }

    public function ligar() {
      if ($this->ligado === true) {
        echo "\n<p>O $this->marca $this->modelo já está ligado.</p>";
      } else {
        echo "\n<p>O $this->marca $this->modelo foi ligado.</p>";
      }
    }

    public function acelerar() {
      if ($this->acelerando === true) {
        echo "<p>Você já está acelerando, reduza.</p>";
        $this->acelerando = false;
      } else {
        echo "<p>Acelerando....</p>";
      }
    }

    public function freiar() {
      if ($this->acelerando === false) {
        echo "<p>Você já está em baixa velocidade.</p>";
      } else {
        echo "<p>Freiando...</p>";
      }
    }

    public function desligar() {
      if ($this->ligado === false) {
        echo "\n<p>O $this->marca $this->modelo já está desligado.</p>";
      } else {
        echo "\n<p>O $this->marca $this->modelo foi desligado.</p>";
      }
    }

    public function mostrarInfo() {
      echo "
        <p>$this->marca $this->modelo $this->ano $this->cor</p>
        <p>Está ligado? " . ($this->ligado === true ? "Sim" : "Não") . ".</p>
      ";
    }
  }
?>