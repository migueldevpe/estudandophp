<?php 
  require_once("interfaceLuta.php");
  require_once("lutador.php");

  class Luta implements InterfaceLuta {
    private $desafiado;
    private $desafiante;
    private $rounds;
    private $aprovada;

    // public function __construct(
    //   $desafiado,
    //   $desafiante,
    //   $rounds = 0,
    //   $aprovada = false,
    // ) {
    //   $this->setDesafiado($desafiado);
    //   $this->setDesafiante($desafiante);
    //   $this->setRounds($rounds);
    //   $this->setAprovada($aprovada);
    //   // $this->desafiado = $desafiado;
    //   // $this->desafiante = $desafiante;
    //   // $this->rounds = $rounds;
    //   // $this->aprovada = $aprovada;
    // }

    public function getDesafiado() {
      return $this->desafiado;
    }

    public function setDesafiado($desafiado) {
      $this->desafiado = $desafiado;
    }

    public function getDesafiante() {
      return $this->desafiante;
    }

    public function setDesafiante($desafiante) {
      $this->desafiante = $desafiante;
    }

    public function getRounds() {
      return $this->rounds;
    }

    public function setRounds($rounds = 0) {
      $this->rounds = $rounds;
    }

    public function getAprovada() {
      return $this->aprovada;
    }

    public function setAprovada($aprovada = false) {
      $this->aprovada = $aprovada;
    }

    public function marcarLuta($lutador1, $lutador2) {
      if ($lutador1->getCategoria() == $lutador2->getCategoria() && $lutador1 !== $lutador2 && $lutador1->getSexo() === $lutador2->getSexo()) {
        $this->setAprovada(true);
        $this->setDesafiado($lutador1);
        $this->setDesafiante($lutador2);
        echo "<p>A luta entre <strong>{$this->getDesafiado()->getNome()}</strong> e <strong>{$this->getDesafiante()->getNome()}</strong> foi aprovada.</p>";
      } else {
        $this->setAprovada(!true);
        $this->setDesafiado(null);
        $this->setDesafiante(null);
        if ($lutador1->getCategoria() !== $lutador2->getCategoria()) {
          echo "<p>Não é possível lutar contra alguém de categoria diferente.</p>";
        } else if ($lutador1 === $lutador2) {
          echo "<p>Não é possível lutar contra si mesmo.</p>";
        } else if ($lutador1->getSexo() !== $lutador2->getSexo()) {
          echo "<p>Não é possível lutar contra alguém do sexo diferente.</p>";
        }
      }
    }

    public function lutar() {
      if ($this->getAprovada()) {
        $this->getDesafiado()->apresentar();
        $this->getDesafiante()->apresentar();
        
        echo "<h1>COMEÇOU A LUTAAAAAAAA!</h1>";

        $vencedor = rand(0,2);

        switch ($vencedor) {
          case 0:
            echo "<p>A luta entre <strong>{$this->getDesafiado()->getNome()}</strong> e <strong>{$this->getDesafiante()->getNome()}</strong> terminou em empate.</p>";
            
            $this->getDesafiado()->empatarLuta();
            $this->getDesafiante()->empatarLuta();

            echo "<p>Agora o <strong>{$this->getDesafiado()->getNome()}</strong> tem <strong>{$this->getDesafiado()->getEmpates()}</strong> empate" . ($this->getDesafiado()->getEmpates() > 1 ? "s" : null) . " e o <strong>{$this->getDesafiante()->getNome()}</strong> tem <strong>{$this->getDesafiante()->getEmpates()}</strong> empate" . ($this->getDesafiante()->getEmpates() > 1 ? "s" : null) . ".</p>";

            break;
          case 1:
            echo "<p style=\"text-trasform: uppercase;\"> <strong>{$this->getDesafiado()->getNome()}</strong> FOI O VENCEDOR! DEIXANDO O <strong>{$this->getDesafiante()->getNome()}</strong> NO CHEIRO!!!";

            $this->getDesafiado()->ganharLuta();
            $this->getDesafiante()->perderLuta();
            
            echo "<p>Agora o <strong>{$this->getDesafiado()->getNome()}</strong> tem <strong>{$this->getDesafiado()->getVitorias()}</strong> vitória" . ($this->getDesafiado()->getVitorias() > 1 ? "s" : null) . " e o <strong>{$this->getDesafiante()->getNome()}</strong> tem <strong>{$this->getDesafiante()->getDerrotas()}</strong> derrota" . ($this->getDesafiante()->getDerrotas() > 1 ? "s" : null) . ".</p>";

            break;
          case 2:
            echo "<p style=\"text-trasform: uppercase;\"> <strong>{$this->getDesafiante()->getNome()}</strong> FOI O VENCEDOR! DEIXANDO O <strong>{$this->getDesafiado()->getNome()}</strong> CHUPANDO DEDO!!!";
            
            $this->getDesafiante()->ganharLuta();
            $this->getDesafiado()->perderLuta();
            
            echo "<p>Agora o <strong>{$this->getDesafiante()->getNome()}</strong> tem <strong>{$this->getDesafiante()->getVitorias()}</strong> vitória" . ($this->getDesafiante()->getVitorias() > 1 ? "s" : null) . " e o <strong>{$this->getDesafiado()->getNome()}</strong> tem <strong>{$this->getDesafiado()->getDerrotas()}</strong> derrota" . ($this->getDesafiado()->getDerrotas() > 1 ? "s" : null) . ".</p>";

            break;
        }
      } else {
        echo "<h1>A luta não pode acontecer.</h1>";
      }
    }
  }
?>