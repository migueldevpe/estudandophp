<?php 
  class Carro {
    private $modelo;
    public $marca;
    public $ano;
    public $cor;
    public $condição;

    public function getModelo() {
      return $this->modelo;
    }

    public function setModelo($modelo) {
      $this->modelo = $modelo;
    }

    public function setMarca($marca) {
      $this->marca = $marca;
    }

    public function getMarca() {
      return $this->marca;
    }

    public function setAno($ano) {
      $this->ano = $ano;
    }

    public function getAno() {
      return $this->ano;
    }

    public function __construct($modelo, $marca, $ano) {
      $this->setModelo($modelo);
      $this->setMarca($marca);
      $this->setAno($ano);
      $this->cor = "Prata";
      $this->condição = true;
      $this->getModelo();
      $this->getMarca();
      $this->getAno();
    }
  }
?>