<?php 

final class ResidentialWay extends HighWay
{
    public function __construct()
    {
        parent::setNbLane(2);
        parent::setMaxSpeed(50);
    }

    public function addVehicle($vehicle)
    {
        if ($vehicle instanceof Vehicle)
        {
            $this->currentVehicles[] = $vehicle;
        } else {
            return 'Ce n\'est pas un véhicule !';
        }        
    }
}