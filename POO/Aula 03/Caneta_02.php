<?php
class Caneta02
{
  public $modelo;
  public $cor;
  private $ponta;
  protected $carga;
  protected $tampa;

  public function tampar()
  {
    if (!$this->tampa) {
      $this->tampa = true;

      print("<p>Tampando a caneta...</p>");
    } else {
      print("<p>A caneta já está tampada!</p>");
    }
  }

  public function destampar()
  {
    if ($this->tampa) {
      $this->tampa = false;
      print("<p>Destampando a caneta...</p>");
    } else {
      print("<p>A caneta já está destampada!</p>");
    }
  }

  public function rabiscar()
  {
    if ($this->tampa) {
      print("<p>A caneta ainda não foi destampada!</p>");
    } else {
      print("<p>Rabiscando...</p>");
    }
  }
}
