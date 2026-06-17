<?
  interface Publicação {
    public function abrir();
    public function fechar();
    public function folhear($pag);
    public function avançarPag();
    public function voltarPag();
  }
?>