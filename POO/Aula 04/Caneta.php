<?php
class Caneta
{
  public $modelo;
  private $ponta;
  private $tampada;
  private $cor;

  public function __construct($m, $p, $c, $t)
  {
    $this->setModelo($m);
    $this->setPonta($p);
    $this->setCor($c);
    $this->isTampada($t);
  }

  /*
  Método construtor por outra declaração

  public function Caneta($m, $p, $c, $t)
  {
    $this->setModelo($m);
    $this->setPonta($p);
    $this->setCor($c);
    $this->isTampada($t);
  }*/

  public function setModelo($m)
  {
    $this->modelo = $m;
  }

  public function setPonta($p)
  {
    $this->ponta = $p;
  }

  public function isTampada($t)
  {
    $this->tampada = $t;
  }

  public function setCor($c)
  {
    $this->cor = $c;
  }

  public function getModelo()
  {
    return $this->modelo;
  }

  public function getPonta()
  {
    return $this->ponta;
  }

  public function getTampada()
  {
    return $this->tampada;
  }

  public function getCor()
  {
    return $this->cor;
  }
}
