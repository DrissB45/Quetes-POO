<?php

require 'motorway.php';
require 'vehicle.php';
require 'bike.php';
require 'skateboard.php';
require 'car.php';

$merco = new Car('grey', 4, 'fuel');


try {
    echo $merco->start(false);
} catch (Exception $exception) {
    echo $merco->setParkBrake(false);
} finally {
    echo 'Ma voiture roule comme un donut !';
}