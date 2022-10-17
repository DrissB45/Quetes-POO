<?php 

final class ResidentialWay extends HighWay
{
    public function residentialNbLane() 
    {
        parent::setNbLane(2);
    }

    public function residentialMaxSpeed()
    {
        parent::setMaxSpeed(50);
    }

    public function addVehicle($vehicle)
    {
        if ($vehicle instanceof Vehicle)
        {
            $currentVehicles[] = $vehicle;
        } else {
            return 'Ce n\'est pas un véhicule !';
        }        
    }
}