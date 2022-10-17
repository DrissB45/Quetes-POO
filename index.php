<?php

require 'motorway.php';
require 'vehicle.php';
require 'bike.php';
require 'skateboard.php';
require 'car.php';

$bmx = new Bike('red', 1);
$skate = new Skateboard('black', 1);
$merco = new Car ('grey', 5, 'gas');