<?php
class Caneta
{
  var $modelo;
  var $cor;
  var $ponta;
  var $carga;
  var $tampa;

  function tampar()
  {
    if (!$this->tampa) {
      $this->tampa = true;

      print("<p>Tampando a caneta...</p>");
    } else {
      print("<p>A caneta já está tampada!</p>");
    }
  }

  function destampar()
  {
    if ($this->tampa) {
      $this->tampa = false;
      print("<p>Destampando a caneta...</p>");
    } else {
      print("<p>A caneta já está destampada!</p>");
    }
  }

  function rabiscar()
  {
    if ($this->tampa) {
      print("<p>A caneta ainda não foi destampada!</p>");
    } else {
      print("<p>Rabiscando...</p>");
    }
  }
}
