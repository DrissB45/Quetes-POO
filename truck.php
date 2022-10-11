<?php

//Appel de la classe parente
require_once 'vehicle.php';

//Création d'une classe enfant
class Truck extends Vehicle {
    private int $stockCapacity;

    private int $load = 0;

    public function __construct(int $stockCapacity, string $color, int $nbSeats, string $energy) { 
        parent::__construct($color, $nbSeats);
        $this->stockCapacity = $stockCapacity;
        $this->energy = $energy;
    }

    public function loading() {
        if ($this->stockCapacity < 1000) {
            return 'In filling';
        } else {
            return 'Full';
        }
    }
}