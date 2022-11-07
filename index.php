<?php

require 'lighteableinterface.php';
require 'vehicle.php';
require 'bike.php';
require 'skateboard.php';
require 'car.php';

$bike = new Bike('red', 1);

$bike->setCurrentSpeed(15);
echo $bike->switchOn();