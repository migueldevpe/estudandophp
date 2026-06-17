<? 
  require_once("publicacao.php");

  class Livro implements Publicação {
    private $titulo;
    private $autor;
    private $totPags;
    private $pagAtual;
    private $aberto;
    private $leitor;

    public function __construct($titulo = "", $autor = "", $totPags = 0, $leitor) {
      $this->titulo = $titulo;
      $this->autor = $autor;
      $this->totPags = $totPags;
      $this->pagAtual = 0;
      $this->aberto = false;
      $this->leitor = $leitor;
    }

    public function detalhes() {
      if ($this->getLeitor()) {
        echo "
          <p>
            O livro <strong><q>{$this->getTitulo()}</q></strong>, escrito por <strong style=\"text-transform: capitalize;\">{$this->getAutor()}</strong>, está sendo lido por <strong>{$this->getLeitor()->getNome()}</strong>. <br> O livro contêm <strong>{$this->getTotPags()}</strong> página" . ($this->getTotPags() > 1 ? "s" : null) . ", <strong>{$this->getLeitor()->getNome()}</strong> está na página <strong>{$this->getPagAtual()}</strong>. No momento o livro está <strong>" . ($this->getAberto() ? "aberto" : "fechado") . "</strong>.
          </p>
        ";
      }
    }

    public function getTitulo() {
      return $this->titulo;
    }

    public function setTitulo($titulo = "") {
      $this->titulo = $titulo;
    }

    public function getAutor() {
      return $this->autor;
    }

    public function setAutor($autor = "") {
      $this->autor = $autor;
    }

    public function getTotPags() {
      return $this->totPags;
    }

    public function setTotPags($totPags = 0) {
      $this->totPags = $totPags;
    }

    public function getPagAtual() {
      return $this->pagAtual;
    }

    public function setPagAtual($pagAtual = 0) {
      $this->pagAtual = $pagAtual;
    }

    public function getAberto() {
      return $this->aberto;
    }

    public function setAberto($aberto = false) {
      $this->aberto = $aberto;
    }

    public function getLeitor() {
      return $this->leitor;
    }

    public function setLeitor($leitor = "") {
      $this->leitor = $leitor;
    }

    public function abrir() {
      $this->setAberto(true);
    }

    public function fechar() {
      $this->setAberto(!true);
    }

    public function folhear($pag) {
      if ($this->getAberto()) {
        if ($pag > $this->getTotPags()) {
          $this->setPagAtual(1);

          echo "<p>Você escolheu a página <strong>{$pag}</strong>, mas, a quantidade de páginas do livro é <strong>{$this->getTotPags()}</strong>. <br> Retornando para a primeira página...</p>";
        } else if ($pag < 1) {
          $this->setPagAtual(1);

          echo "<p>ERRO: Você escolheu um número de páginas negativo. <br> Retornando para a primeira página...</p>";
        } else {
          $this->setPagAtual($pag);

          echo "<p>Indo para a página <strong>{$this->getPagAtual()}</strong>.</p>";
        }
      } else {
        echo "<p>O livro está fechado, abra ele.</p>";
      }
    }

    public function avançarPag() {
      if ($this->getAberto()) {
        if ($this->getPagAtual() < $this->getTotPags()) {
          echo "
            <p>
              Avançando para a próxima página... <br>
              Página anterior: <strong>{$this->getPagAtual()}</strong>. <br>
          ";

          $this->setPagAtual($this->getPagAtual() + 1);  

          echo "
              Página atual: <strong>" . ($this->getPagAtual()) . "</strong>.
            </p>
          ";
        } else {
          echo "<p>Você não pode avançar uma página devido a estar na última página.</p>";
        }
      } else {
        echo "<p>O livro não está aberto.</p>";
      }
    }

    public function voltarPag() {
     if ($this->getAberto()) {
        if ($this->getPagAtual() > 1) {
          echo "
            <p>
              Voltando uma página... <br>
              Página anterior: <strong>{$this->getPagAtual()}</strong>. <br>
          ";

          $this->setPagAtual($this->getPagAtual() - 1);  

          echo "
              Página atual: <strong>" . ($this->getPagAtual()) . "</strong>.
            </p>
          ";
        } else {
          echo "<p>Você não pode voltar uma página devido a estar na primeira página.</p>";
        }
      } else {
        echo "<p>O livro não está aberto.</p>";
      }
    }
  }
?>