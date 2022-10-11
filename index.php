<?php

//Appel des fichiers contenant les classes

require_once 'vehicle.php';
require_once 'truck.php';

//Instanciation d'un nouveau camion

$scania = new Truck(500, 'red', 3, 'fuel');

var_dump($scania);

//Test des fonctions de mon camion

echo $scania->forward() . PHP_EOL;

echo $scania->brake() . PHP_EOL;

echo $scania->loading() . PHP_EOL;