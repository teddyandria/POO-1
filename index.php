<?php

require_once 'Bicycle.php';
require_once 'Car.php';
require_once 'Truck.php';
require_once 'HighWay.php';
require_once 'MotorWay.php';
require_once 'PedestrianWay.php';
require_once 'ResidentialWay.php';
require_once 'Skateboard.php';

$tesla = new Car('black', 4, 'electric');
$ferrari = new Car('red', 2, 'fuel');
$bicycle = new Bicycle('Blue', 1);
$skate = new Skateboard('white', 1);
// echo $bicycle->forward();

$car = new Car('green', 4, 'electric');
$polo = new Car('black', 4, 'fuel');

try {
    echo $polo->start();
} catch (Exception $e) {
    echo $e->getMessage() . ', retire le frein à main';
    $polo->setParkBrake(false);
} finally {
    echo PHP_EOL . 'Ma voiture roule comme un donut';
}
// echo $car->forward();

// $scania = new Truck('pink', 3, 'electric', 100);
// echo $scania->full(100);
// echo $scania->forward();
// echo $scania->brake();

// // var_dump($scania);

// $camion = new Truck('white', 3, 'fuel', 250);
// echo $camion->full(250);
// echo $camion->forward();
// echo $camion->brake();

$motorway = new MotorWay;
$motorway->addVehicle($tesla);
$motorway->addVehicle($bicycle);


$pedestrian = new PedestrianWay;
$pedestrian->addVehicle($ferrari);
$pedestrian->addVehicle($skate);
$pedestrian->addVehicle($bicycle);


$residential = new ResidentialWay;
$residential->addVehicle($skate);
$residential->addVehicle($tesla);
$residential->addVehicle($bicycle);

var_dump($motorway);
var_dump($pedestrian);
var_dump($residential);
