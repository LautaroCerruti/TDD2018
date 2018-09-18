<?php

namespace TDD;

use PHPUnit\Framework\TestCase;

class CartaTest extends TestCase {

    /**
     * Valida la creacion de una carta.
	Ver Palo
	Ver numero
     */
    public function testCartaEspañola() {
        $carta = new Carta("Española","Copa",4);
        $this->assertTrue(isset($carta));
	$this->assertEqual($carta->TipoDeCarta(),"Española");	
	$this->assertEqual($carta->Palo(),"Copa");
	$this->assertEqual($cartas->Num(),4);
    }
    public function testCartaPoker() {
        $carta = new Carta("Poker","Copa",4);
        $this->assertTrue(isset($carta));
	$this->assertEqual($carta->TipoDeCarta(),"Poker");	
	$this->assertEqual($carta->Palo(),"Copa");
	$this->assertEqual($cartas->Num(),4);
    }


}
