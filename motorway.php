<?php

require 'highway.php';

final class MotorWay extends HighWay

{
    public function motorNbLane() 
    {
        parent::setNbLane(4);
    }

    public function motorMaxSpeed()
    {
        parent::setMaxSpeed(130);
    }

    public function addVehicle($vehicle)
    {
        if ($vehicle instanceof Bike || $vehicle instanceof Skateboard)
        {
            return 'Véhicules interdits !';
        } else {
            $currentVehicles[] = $vehicle;
        }        
    }
 
}

