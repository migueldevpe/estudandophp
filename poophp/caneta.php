<?php
  class Caneta {
    var $modelo;
    var $cor;
    var $ponta;
    var $carga;
    var $tampada;

    function rabiscar() { 
      if ($this->tampada === true) {
        echo "<p>Sua caneta está tampada.</p>";
      } else if ($this->carga < 20) {
        echo "<p>Sua caneta tem a possibilidade de falhar.</p>";
      } else {
        echo "<p>Rabiscando...</p>";
      }
    }
    function destampar() { 
      if ($this->tampada === true) {
        echo "<p>Destampado.</p>"; 
      } else {
        echo "<p>Sua caneta está destampada.";
      }
    }
    function tampar() {
      if ($this->tampada === false) {
        echo "<p>Tampado.</p>"; 
      } else {
        echo "<p>Sua caneta está tampada.</p>"; 
      }
    }
  }

  // ÚLTIMA AULA - CURSO POO PHP #02b - MINUTO: 15:15
?>