<?php

abstract class HighWay
{
    protected array $currentVehicles;
    protected int $nbLane;
    protected int $maxSpeed;

    protected function getCurrentVehicles() {
        return $this->currentVehicles;
    }

    protected function getNbLane() {
        return $this->nbLane;
    }

    protected function getMaxSpeed() {
        return $this->maxSpeed;
    }

    protected function setCurrentVehicles(array $currentVehicles) {
        $this->currentVehicles = $currentVehicles;
    }

    protected function setNbLane(int $nbLane) {
        $this->nbLane = $nbLane;
    }

    protected function setMaxSpeed(int $maxSpeed) {
        $this->maxSpeed = $maxSpeed;
    }

    protected function __construct($nbLane, $maxSpeed) {
        $this->nbLane = $nbLane;
        $this->maxSpeed = $maxSpeed;
    }

    abstract protected function addVehicle(Vehicle $vehicle);

}