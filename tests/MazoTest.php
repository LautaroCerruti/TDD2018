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

    /**
     * Valida que se puede mezclar un mazo de cartas.
     */
    public function testMezclable() {
        $mazo = new Mazo("Poker");
        $copia = $mazo->ObtenerTodas();
        $this->assertTrue($mazo->mezclar());
        $this->assertNotEquals($mazo->ObtenerTodas(),$copia);
    }

    /**
     * Valida que se puede cortar un mazos de cartas.
     */
    public function testCortar() {
	    $mazo= new Mazo("Español");
        $copia = $mazo->ObtenerTodas();
        $this->assertTrue($mazo->cortar());
        $this->assertNotEquals($mazo->ObtenerTodas(),$copia);
}

    /**
     * Valida que la funcion para contar la cantidad de cartas devuelve el valor correcto.
     */
    public function testContarCartas() {
	    $mazo= new Mazo("Español");
        $this->assertEquals($mazo->ConCart(),50);
}

    /**
     * Valida que se puede sacar una carta del mazo.
     */
    public function testObtenerCarta(){
	    $mazo= new Mazo("Español");
	    $carta= $mazo->ObtenerCarta();
        $this->assertEquals($carta->palo(),"Joker");
        $this->assertEquals($carta->tipo(),"Española");
        $this->assertEquals($carta->numero(),2);
}

    /**
     * Prueba la funcion que valida que el mazo no tiene cartas
     */
    public function testIndicarSiTiene(){
        $mazo = new Mazo("Español");
        $this->assertEquals($mazo->TieneCartas(),true);
        for($i=0;$i<50;$i++){
            $mazo->ObtenerCarta();
        }
        $this->assertEquals($mazo->TieneCartas(),false);
    }
    
    /**
     * Valida que se pueden agregar cartas a un mazo.
     */
    public function testAgregarCarta(){
        $mazo = new Mazo("Español");
        $carta = new Carta("Española", "Copa", 4);
        $mazo->Agregar($carta);
        $this->assertEquals($mazo->ConCart(),51);
    }

    /**
     * Es un test que prueba todos los posibles errores que puede dar pasar cosas invalidas como parametros
     */
    public function testFalla(){
        $mazo = new Mazo("G");
        $mazo = new Mazo("Vacio");
        $this->assertFalse($mazo->agregar(4));
        $this->assertFalse($mazo->cortar());
        $this->assertFalse($mazo->mezclar());
    }
}