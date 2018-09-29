<?php

namespace TDD;

use PHPUnit\Framework\TestCase;

class CartaTest extends TestCase
{

    /**
     * Valida la creacion de una carta.
    Ver Palo
    Ver numero
     */
    public function testCartaEspañola()
    {
        $carta = new Carta("Española", "Copa", 4);
        $this->assertTrue(isset($carta));
        $this->assertEquals($carta->tipo(), "Española");
        $this->assertEquals($carta->palo(), "Copa");
        $this->assertEquals($carta->numero(), 4);
    }
    public function testCartaPoker()
    {
        $carta = new Carta("Poker", "Copa", 4);
        $this->assertTrue(isset($carta));
        $this->assertEquals($carta->tipo(), "Poker");
        $this->assertEquals($carta->palo(), "Copa");
        $this->assertEquals($carta->numero(), 4);
    }

}
