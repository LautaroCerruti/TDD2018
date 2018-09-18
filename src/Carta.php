<?php

namespace TDD;

class Carta {
  protected $tipo;
  protected $palo;
  protected $numero;
  public function __construct($tipo,$palo,$numero){
	$this->tipo= $tipo;
	$this->palo= $palo;
	$this->numero= $numero;
  }		


  public function palo() {
	return $this->palo;
  }

  public function tipo() {
	return $this->tipo;
}

  public function numero() {
	return $this->numero;
}
}
