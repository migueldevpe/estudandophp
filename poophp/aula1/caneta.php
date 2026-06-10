<?php
  class Caneta { // criação da classe
    var $modelo; // definindo os atributos da classe (variável e nome da variável)
    var $cor;
    var $ponta;
    var $carga;
    var $tampada;

    function rabiscar() { // criando os métodos da classe (que nem uma função, tem parâmetros, bloco de código, etc.)
      if ($this->tampada === true) { // para se referir aos atributos criados, sempre utiliza-se o $this->, é praticamente dizendo: ISSO DA CLASSE
        echo "\n<p>Primeiro, destampe a sua caneta, ela está tampada.</p>";
      } else if ($this->carga <= 20 && $this->tampada === false) {
        echo "\n<p>Sua caneta pode falhar, rabiscando..</p>.";
      } else {
        echo "\nRabiscando...";
      }
    }

    function destampar() {
      if ($this->tampada === true) {
        echo "\n<p>Primeiro, destampe a sua caneta.</p>";
      } else {
        echo "\n<p>Destampado.</p>";
      } 
    }

    function tampar() {
      if ($this->tampada === true) {
        echo "\n<p>Já está tampada. Destampe.</p>";
      } else {
        echo "\n<p>Tampado.</p>";
      }
    }
  }

?>