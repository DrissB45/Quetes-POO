<?php

require_once 'bicycle.php';
require_once 'car.php';

$tMax = new Bicycle('black');

$amgGT = new Car('blue', 5, 30);

echo $tMax->brake();

echo $amgGT->getEnergyLevel();

?>







/* $bike = new Bicycle();
var_dump($bike);

$bike -> color = 'blue';
$bike -> currentSpeed = '0';
var_dump($bike);

//moving bike
echo $bike->forward();
echo '<br> Vitesse du vélo : ' . $bike->currentSpeed . ' km/h' . '<br>';
echo $bike->brake();
echo '<br> Vitesse du vélo : ' . $bike->currentSpeed . ' km/h' . '<br>';
echo $bike->brake();

//Instanciation d'un nouvel objet $rockrider
$rockrider = new Bicycle();
$rockrider->color = 'Yellow';

//Instanciation d'un nouvel objet $tornado
$tornado = new Bicycle();
$tornado->color = 'Black';

$tornado->setColor('blue');
$tornado->getColor();

echo $tornado

$tornado = new Bicycle();
$tornado->setColor('Orange');
$tornado->getColor();
$tornado->setCurrentSpeed(78);
$tornado -> getCurrentSpeed();

echo $tornado->getColor(); */
