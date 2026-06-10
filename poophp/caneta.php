<?php
  class Caneta { // criação da classe
    var $modelo; // definindo os atributos da classe (variável e nome da variável)
    var $cor;
    var $ponta;
    var $carga;
    var $tampada;

    function rabiscar() { // criando os métodos da classe (que nem uma função, tem parâmetros, bloco de código, etc.)
      if ($this->tampada === true) { // para se referir aos atributos criados, sempre utiliza-se o $this->, é praticamente dizendo: ISSO DA CLASSE
        echo "Primeiro, destampe a sua caneta, ela está tampada.";
      } else if ($this->carga <= 20 && $this->tampada === false) {
        echo "Sua caneta pode falhar, rabiscando...";
      } else {
        echo "Rabiscando...";
      }
    }

    function destampar() {
      if ($this->tampada === true) {
        echo "Primeiro, destampe a sua caneta.";
      } else {
        echo "Destampado.";
      } 
    }
  }

?>