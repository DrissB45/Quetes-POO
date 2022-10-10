<?php

class Car {
    private int $nbWheels;

    private float $currentSpeed;

    private string $color;

    private int $nbSeats;

    private string $energy;

    private int $energyLevel;

    public function __construct(string $color, int $nbSeats, int $energyLevel) {
        $this->color = $color;
        $this->nbSeats = $nbSeats;
        $this->energyLevel = $energyLevel;
    }

   public function start() {
        $this->currentSpeed = 10;
        return 'Let\'s start !';
    }

   public function forward() {
        $this->currentSpeed = 50;
        return 'We are going straight !';
    }

   public function brake() {
        $sentence = "";

        while ($this->currentSpeed > 0) {
            $this->currentSpeed--;
            $sentence .= 'Brake !!!';
        }
        $sentence = "I'm stopped !";
    }

    public function getNbWheels() {
        return $this->nbWheels;
    }

    public function getCurrentSpeed() {
        return $this->currentSpeed;
    }

    public function getColor() {
        return $this->color;
    }

    public function getNbSeats() {
        return $this->nbSeats;
    }

    public function getEnergy() {
        return $this->energy;
    }

    public function getEnergyLevel() {
        return $this->energyLevel;
    }
}