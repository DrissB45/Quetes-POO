<?php 

final class PedestrianWay extends HighWay
{
    public function pedestrianNbLane() 
    {
        parent::setNbLane(1);
    }

    public function pedestrianMaxSpeed()
    {
        parent::setMaxSpeed(10);
    }

    public function addVehicle($vehicle)
    {
        if ($vehicle instanceof Bike || $vehicle instanceof Skateboard)
        {
            $currentVehicles[] = $vehicle;
        } else {
            return 'Véhicules interdits !';
        }        
    }
}
