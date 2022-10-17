<?php

require_once 'vehicle.php';

class Car extends Vehicle {
    
    public const ALLOWED_ENERGIES = [
        'fuel',
        'electric',
    ];

    private string $energy;

    private int $energyLevel;

    public function __construct(string $color, int $nbSeats, string $energy) {
        parent::__construct($color, $nbSeats);
        $this->energy = $energy;
    }

    public function getEnergy() {
        return $this->energy;
    }

    public function getEnergyLevel() {
        return $this->energyLevel;
    }

    public function setEnergy(string $energy) : Car {

        if (in_array($energy, self::ALLOWED_ENERGIES)) {
            $this->energy = $energy;
        }
        return $this;
    }
} 