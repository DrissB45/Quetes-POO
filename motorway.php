<?php

require 'highway.php';

final class MotorWay extends HighWay

{
    public function __construct()
    {
        parent::setNbLane(4);
        parent::setMaxSpeed(130);
    }

    public function addVehicle($vehicle)
    {
        if ($vehicle instanceof Bike || $vehicle instanceof Skateboard)
        {
            return 'Véhicules interdits !';
        } else {
            $this->currentVehicles[] = $vehicle;
        }        
    }
}

