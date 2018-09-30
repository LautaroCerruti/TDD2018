<?php

namespace TDD;

use PHPUnit\Framework\TestCase;

class MazoTest extends TestCase {

    /**
     * Valida que se puedan crear mazos de cartas.
     */

    public function testExiste() {
        $mazo = new Mazo("Español");
        $this->assertTrue(isset($mazo));
    }

    public function testMezclable() {
        $mazo = new Mazo("Poker");
        $copia = $mazo;
        $this->assertTrue($mazo->mezclar());
        $this->assertFalse($mazo->ObtenerTodas()==$copia->ObtenerTodas());
    }

    public function testCortar() {
	    $mazo= new Mazo("Español");
	    $copia = $mazo;
	    $mazo->cortar();
        $this->assertFalse($mazo->ObtenerTodas()==$copia->ObtenerTodas());
}

    public function testContarCartas() {
	    $mazo= new Mazo("Español");
        $this->assertEquals($mazo->ConCart(),50);
}
    public function testObtenerCarta(){
	    $mazo= new Mazo("Español");
	    $carta= $mazo->ObtenerCarta();
        $this->assertEquals($carta->palo(),"Joker");
        $this->assertEquals($carta->tipo(),"Española");
        $this->assertEquals($carta->numero(),2);
}
    public function testIndicarSiTiene(){
        $mazo = new Mazo("Español");
        $this->assertEquals($mazo->TieneCartas(),true);
        for($i=0;$i<50;$i++){
            $mazo->ObtenerCarta();
        }
        $this->assertEquals($mazo->TieneCartas(),false);
    }
    
    public function testAgregarCarta(){
        $mazo = new Mazo("Español");
        $carta = new Carta("Española", "Copa", 4);
        $mazo->Agregar($carta);
        $this->assertEquals($mazo->ConCart(),51);
    }
}