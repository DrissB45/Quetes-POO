<?php

class Bike extends Vehicle implements LightableInterface {


    public function switchOn()
    {
        if ($this->currentSpeed > 10) {
            return 'true';
        }
    }

    public function switchOff()
    {
        return 'false';
    }
    
}