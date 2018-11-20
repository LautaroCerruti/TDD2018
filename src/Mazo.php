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
                $this->crearEspanol();
                break;
            case "Poker":
                $this->crearPoker();
                break;
            case "Vacio": $this->cant_cart=0;
            default:break;
        }
    }
    
    public function crearEspanol(){
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
    }
    
    public function crearPoker(){
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
    }

    public function mezclar()
    {
        if (!count($this->cartas)) {
            return false;
        }
        $this->cartas=shuffle($this->cartas);
        return true;
    }
    public function cortar()
    {
        $mitad = array();
        $j = 0;
        if (!count($this->cartas)) {
          return false;
        }
        $random = rand(1, $this->cant_cart);
        for($i = $this->cant_cart-1; $i > $random; $i--)
        {
            $mitad[$j]=$this->cartas[$i];
            unset($this->cartas[$i]); 
            $j++;
        }
        $this->cartas=array_merge($mitad,$this->cartas);
        return true;
    }
    public function ObtenerTodas(){
        return $this->cartas;
      }
  
      public function ConCart(){
        return $this->cant_cart;
      }
  
      public function ObtenerCarta(){
        $carta = $this->cartas[$this->cant_cart-1];
        unset($this->cartas[$this->cant_cart-1]);
        $this->cant_cart--;
        return $carta;
      }
  
      public function TieneCartas(){
        if($this->cant_cart>0){
            return TRUE;
        }
        else{
            return FALSE;
        }
      }

      public function Agregar($carta){
        if($carta instanceof Carta){
          $this->cartas[$this->cant_cart] = $carta;
          $this->cant_cart++;
          return TRUE;
        }
        return FALSE;
      }
}
