<?php

namespace TDD;

use PHPUnit\Framework\TestCase;

class MazoTest extends TestCase {

    /**
     * Valida que se puedan crear mazos de cartas.
     */
    public function testExiste() {
        $mazo = new Mazo("Español",50);
        $this->assertTrue(isset($mazo));
    }

    public function testMezclable() {
        $mazo = new Mazo("Poker",50);
	$copia = $mazo;
	$mazo->mezclar();
        $this->assertFalse($mazo==$copia);
    }

    public function testCortar() {
	$mazo= new Mazo("Español",50);
	$copia = $mazo;
	$mazo->cortar();
        $this->assertFalse($mazo==$copia);
}

    public function testContarCartas() {
	$mazo= new Mazo("Español",50);
        $this->assertEquals($mazo->ConCart(),50);
}
    public function testObtenerCarta(){
	$mazo= new Mazo("Español",50);
	$carta= new Carta("Español","Oro",1);
        $this->assertEquals($mazo->ObtenerCarta(),);
}
	

    
}
