<?php

namespace TDD;

class Mazo
{
    private $cartas = array();

    private $cant_cart = 0;

    public function __construct($tipo)
    {
        switch ($tipo) {
            case "Español":
                for ($i = 1; $i < 13; $i++) {
                    $this->cartas[$this->cant_cart] = new Carta("Española", "Oro", $i);
                    $this->cant_cart++;
                }
                for ($i = 1; $i < 13; $i++) {
                    $this->cartas[$this->cant_cart] = new Carta("Española", "Copa", $i);
                    $this->cant_cart++;
                }
                for ($i = 1; $i < 13; $i++) {
                    $this->cartas[$this->cant_cart] = new Carta("Española", "Basto", $i);
                    $this->cant_cart++;
                }
                for ($i = 1; $i < 13; $i++) {
                    $this->cartas[$this->cant_cart] = new Carta("Española", "Espada", $i);
                    $this->cant_cart++;
                }
                $this->cartas[$this->cant_cart] = new Carta("Española", "Joker", 1);
                $this->cant_cart++;
                $this->cartas[$this->cant_cart] = new Carta("Española", "Joker", 2);
                $this->cant_cart++;
                break;
            case "Poker":
                for ($i = 1; $i < 11; $i++) {
                    $this->cartas[$this->cant_cart] = new Carta("Poker", "Diamante", $i);
                    $this->cant_cart++;
                }
                $this->cartas[$this->cant_cart] = new Carta("Poker", "Diamante", "J");
                $this->cant_cart++;
                $this->cartas[$this->cant_cart] = new Carta("Poker", "Diamante", "Q");
                $this->cant_cart++;
                $this->cartas[$this->cant_cart] = new Carta("Poker", "Diamante", "K");
                $this->cant_cart++;
                for ($i = 1; $i < 11; $i++) {
                    $this->cartas[$this->cant_cart] = new Carta("Poker", "Corazon", $i);
                    $this->cant_cart++;
                }
                $this->cartas[$this->cant_cart] = new Carta("Poker", "Corazon", "J");
                $this->cant_cart++;
                $this->cartas[$this->cant_cart] = new Carta("Poker", "Corazon", "Q");
                $this->cant_cart++;
                $this->cartas[$this->cant_cart] = new Carta("Poker", "Corazon", "K");
                $this->cant_cart++;
                for ($i = 1; $i < 11; $i++) {
                    $this->cartas[$this->cant_cart] = new Carta("Poker", "Trebol", $i);
                    $this->cant_cart++;
                }
                $this->cartas[$this->cant_cart] = new Carta("Poker", "Trebol", "J");
                $this->cant_cart++;
                $this->cartas[$this->cant_cart] = new Carta("Poker", "Trebol", "Q");
                $this->cant_cart++;
                $this->cartas[$this->cant_cart] = new Carta("Poker", "Trebol", "K");
                $this->cant_cart++;
                for ($i = 1; $i < 11; $i++) {
                    $this->cartas[$this->cant_cart] = new Carta("Poker", "Pica", $i);
                    $this->cant_cart++;
                }
                $this->cartas[$this->cant_cart] = new Carta("Poker", "Pica", "J");
                $this->cant_cart++;
                $this->cartas[$this->cant_cart] = new Carta("Poker", "Pica", "Q");
                $this->cant_cart++;
                $this->cartas[$this->cant_cart] = new Carta("Poker", "Pica", "K");
                $this->cant_cart++;
                break;
            default:break;
        }
    }

    public function mezclar()
    {
        if (!count($this->cartas)) {return false;}
        shuffle($this->cartas);
        return true;
    }
}
