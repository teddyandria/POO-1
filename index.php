<?php 

require_once 'Bicycle.php';
require_once 'Car.php';
require_once 'Truck.php';

$bicycle = new Bicycle('Blue', 1);
echo $bicycle->forward();


$car = new Car('green', 4, 'electric');
echo $car->forward();

$scania = new Truck('pink', 3, 'electric', 100);
echo $scania->full(100);
echo $scania->forward();
echo $scania->brake();

var_dump($scania);

$camion = new Truck('white', 3, 'fuel', 250);
echo $camion->full(250);
echo $camion->forward();
echo $camion->brake();

var_dump($camion);