<?php 
  require_once("interfaceControle.php");

  class Controlamento implements Controlador {
    private $volume;
    private $ligado;
    private $tocando;
    private $situacaoMenu;

    public function __construct($volume = 50, $ligado = false, $tocando = false, $situacaoMenu = true) {
      $this->volume = $volume;
      $this->ligado = $ligado;
      $this->tocando = $tocando;
      $this->situacaoMenu = $situacaoMenu;
      // $this->volume = 50;
      // $this->ligado = false;
      // $this->tocando = false;
      // $this->situacaoMenu = true;
    }

    public function ligar() {
      if ($this->getLigado()) {
        echo "<p>Já está ligado.</p>";
      } else {
        $this->setLigado(true);
        echo "<p>Foi ligado.</p>";
      }
    }

    public function desligar() {
      if ($this->getLigado()) {
        echo "<p>Já está desligado.</p>";
      } else {
        echo "<p>Foi desligado.</p>";
        $this->setLigado(!true);
        $this->setTocando(!true);
      }
    }

    public function abrirMenu() {
      $barras = "";

      for ($i = 0; $i < $this->getVolume(); $i += 10) {
        $barras .= "
          <strong style=\"display: flex; flex-direction: column; align-items: center;\">
            <span style=\"font-size: 1.5rem;\">|</span>
            <span style=\"font-size: .75rem;\">" . ($i + 10) . "</span>
          </strong>
        ";
      }

      if ($this->getSituacaoMenu()) {
        echo "
          <div style=\"display: flex; flex-direction: column; gap: .5rem;\">
            <p style=\"line-height: 1; margin: 0;\">O rádio está: <strong>" . ($this->getLigado() ? "Ligado" : "Desligado") . ".</strong></p>
            <p style=\"line-height: 1; margin: 0\">O volume é: <strong>" . $this->getVolume() . "%</strong>.</p>   
            <div style=\"display: flex; flex-direction: row; gap: .25rem;\">" . $barras . "</div>
            <p style=\"line-height: 1; margin: 0\">Está tocando? <strong>" . ($this->getTocando() ? "Sim" : "Não") . "</strong>.</p>
          </div>
        ";
      } else {
        echo "<h1>MENU FECHADO.</h1>";
      }
    }

    public function fecharMenu() {
      if (!$this->getSituacaoMenu()) {
        echo "<h1>O MENU JÁ ESTÁ FECHADO.</h1>";
      } else {
        echo "<p>Fechando o menu...";
        $this->setSituacaoMenu(false);
      }
    }

    public function maisVolume($vol = 0) {
      if (($this->getVolume() - $vol) > 100) {
        echo "<p>O volume máximo é 100%.</p>";
        $this->setVolume(100);
      } else if ($vol < 0) {
        echo "<p>O volume definido não pode ser negativo.</p>";
      } else if ($this->getLigado()) {
        $this->setVolume($this->getVolume() + $vol);
      } else {
        echo "<p>ERRO</p>";
      }
    }

    public function menosVolume($vol = 0) {
        if (($this->getVolume() - $vol) < 0) {
        echo "<p>O volume mínimo é 0%.</p>";
        $this->setVolume(0);
      } else if ($vol < 0) {
        echo "<p>O volume definido não pode ser negativo.</p>";
      } else if ($this->getLigado()) {
        $this->setVolume($this->getVolume() - $vol);
      } else {
        echo "<p>ERRO</p>";
      }
    }

    public function ligarMudo() {
      if ($this->getVolume() > 0) {
        echo "<p>Mutado.</p>";
        $this->setVolume(0);
      } else {
        echo "<p>Já está no mudo.</p>";
      }
    }

    public function desligarMudo() {
      if ($this->getVolume() === 0) {
        echo "<p>Desmutado.</p>";
        $this->setVolume(50);
      } else {
        echo "<p>Já está no mudo.</p>";
      }
    }

    public function play() {
      if ($this->getLigado() && !$this->getTocando()) {
        echo "<p>Está tocando.</p>";
        $this->setTocando(true);
      } else {
        echo "<p>Já está tocando...</p>";
      }
    }

    public function pause() {
      if ($this->getLigado() && $this->getTocando()) {
        echo "<p>Parou de tocar.</p>";
        $this->setTocando(false);
      } else {
        echo "<p>Já parou de tocar.</p>";
      }
    } 

    public function getVolume() {
      return $this->volume;
    }

    public function setVolume($volume = 0) {
      $this->volume = $volume;
    }

    public function getLigado() {
      return $this->ligado;
    }

    public function setLigado($ligado = false) {
      $this->ligado = $ligado;
    }

    public function getTocando() {
      return $this->tocando;
    }

    public function setTocando($tocando = false) {
      $this->tocando = $tocando;
    }

    public function getSituacaoMenu() {
      return $this->situacaoMenu;
    }

    public function setSituacaoMenu($situacao = true) {
      $this->situacaoMenu = $situacao;
    }
  }
?>