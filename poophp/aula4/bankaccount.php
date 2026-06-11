<?php 
  class ContaBanco {
    public $nConta;
    protected $tipo;
    private $nome;
    private $saldo;
    private $status;
    private $padrao;

    public function __construct($saldo = 0, $status = false) {
      $this->saldo = $saldo;
      $this->status = $status;
      $this->padrao = numfmt_create("pt-BR", NumberFormatter::CURRENCY);
    }

    public function setTipo($tipo) {
      $this->tipo = $tipo;
    }

    public function getTipo() {
      return $this->tipo;
    }

    public function setNome($nome) {
      $this->nome = $nome;
    }

    public function getNome() {
      return $this->nome;
    }

    public function getSaldo() {
      echo "<p>Seu saldo atual: <strong>" . numfmt_format_currency($this->padrao, $this->saldo, "BRL") . "</strong>.</p>";
      // return $this->saldo; aí sim funcionaria o $this->setSaldo($this->getSaldo() - x);
    }

    public function setSaldo($saldo) {
      $this->saldo = $saldo;
    }

    public function depositar($valor) {
      if ($this->status === true) {
        $this->saldo += $valor;
        // setSaldo(getSaldo() + $valor);

        echo "
          <p>Você depositou <strong>" . numfmt_format_currency($this->padrao, $valor, "BRL") . "</strong>. (<small>Seu saldo atual: <strong>" . numfmt_format_currency($this->padrao, $this->saldo, "BRL") . "</strong></small>)</p>
          
        ";
      } else {
        echo "<p>Sua conta está fecha</p>";
      }
    }

    public function sacar($valor) {
      if ($this->status === true && $valor <= $this->saldo) {
        $this->saldo -= $valor;

        echo "<p>Você sacou <strong>" . numfmt_format_currency($this->padrao, $valor, "BRL") . "</strong>. (<small>Seu saldo atual: <strong>" . numfmt_format_currency($this->padrao, $this->saldo, "BRL") . "</strong></small>)</p>";
      } else if ($this->status === true && $this->saldo < $valor) {
        echo "<p>Você não possui saldo o suficiente. (<small>Seu saldo atual: <strong>" . numfmt_format_currency($this->padrao, $this->saldo, "BRL") . "</strong></small>) (<small>Valor do saque: <strong>" . numfmt_format_currency($this->padrao, $valor, "BRL") . "</strong></small>)</p>";
      }
    }

    public function abrirConta($nome, $tipo) {
      echo "<h3>Informe o tipo da sua conta. Escolha entre Conta Corrente (CC) ou Conta Poupança (CP)</h3>";

      if (!$nome || !$tipo) {
        echo "<p>Erro, tipo desconhecido.</p>";
      } else {
        $this->nConta = rand(1000, 9999);
        $this->setNome($nome);
        $this->status = true;
        if ($tipo === "CC") {
          $this->setTipo("Conta Corrente");
          $this->setSaldo(50);
        } else if ($tipo === "CP") {
          $this->setTipo("Conta Poupança");
          $this->setSaldo(150);
        }
      }

      echo "
        <p>
          Sua conta foi criada, veja os detalhes:
          <ul>
            <li>Número da conta: <strong>$this->nConta</strong>.</li>
            <li>Seu nome: <strong style=\"text-transform: capitalize;\">$this->nome</strong>.</li>
            <li>Tipo da conta: <strong>$this->tipo</strong>.</li>
            <li>Saldo disponível: <strong>" . numfmt_format_currency($this->padrao, $this->saldo, "BRL") . "</strong>.</li>
            <li>Status da conta: <strong style=\"text-transform: capitalize;\">" . ($this->status ? "Aberta" : "Fechada") . "</strong>.</li>
          </ul>
        </p>
      ";
    }
      
    public function fecharConta($confirmacao) {
      if (!$confirmacao) {
        echo "<p>Ok, sua conta não será encerrada</p>";
      } else {
        if ($this->getSaldo() > 0) { // ($this->saldo)
          echo "<p>Sua conta não pode ser encerrada, devido ainda ter saldo disponível na conta. (<strong>" . numfmt_format_currency($this->padrao, $this->saldo, "BRL") . "</strong>)</p>";
        } else if ($this->getSaldo() < 0) {
          echo "<p>Sua conta não pode ser encerrada, devido ainda ter débito/pendências na conta. (<strong>" . numfmt_format_currency($this->padrao, $this->saldo, "BRL") . "</strong>)</p>";
        } else {
          $this->status = false;
          $this->tipo = null;

          echo "<p>Sua conta foi encerrada. Status da conta: <strong style=\"text-transform: capitalize;\">" . ($this->status ? "Aberta" : "Fechada") . "</strong>.</p>";
        }
      }
    }

    public function pagarMensalidade($confirmacao) {
      if (!$confirmacao) {
        echo "<p>Pagamento da mensalidade não foi aprovado. <sub><strong>(Falta de confirmação)</strong></sub></p>";
      } else {
        echo "<p>Pagamento da mensalidade confirmado.</p>";
    
        $valor = 0;

        if ($this->getTipo() === "Conta Corrente") {
          $valor = 20;
        } else if ($this->getTipo() === "Conta Poupança") {
          $valor = 12;
        }

        $this->saldo -= $valor;
        echo "<p><strong style=\"color: red;\">-</strong> " . numfmt_format_currency($this->padrao, $valor, "BRL") . " (<small>Seu saldo atual: <strong>" . numfmt_format_currency($this->padrao, $this->saldo, "BRL") . "</strong></small>).</p>";
      }
    }
  }
// CC = 50 REAIS SALDO INICIAL
// CP = 150 REAIS SALDO INICIAL

// CC = 20 REAIS MENSALIDADE
// CP = 12 REAIS MENSALIDADE
?>