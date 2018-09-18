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
	$this->assertEquals($carta->TipoDeCarta(),"Española");	
	$this->assertEquals($carta->Palo(),"Copa");
	$this->assertEquals($cartas->Num(),4);
    }
    public function testCartaPoker() {
        $carta = new Carta("Poker","Copa",4);
        $this->assertTrue(isset($carta));
	$this->assertEquals($carta->TipoDeCarta(),"Poker");	
	$this->assertEquals($carta->Palo(),"Copa");
	$this->assertEquals($cartas->Num(),4);
    }


}
