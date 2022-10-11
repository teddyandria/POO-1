<?php 

require_once 'Bicycle.php';
require_once 'Car.php';

$bike = new Bicycle('Blue');
$vehicle = new Car('Red', 5, 30);


var_dump($bike);

$bike->getCurrentSpeed = 0;
var_dump($bike);

echo $bike->forward();
echo '<br> Vitesse du vélo : ' . $bike->getCurrentSpeed . ' km/h' . '<br>';
echo $bike->brake();
echo '<br> Vitesse du vélo : ' . $bike->getCurrentSpeed . ' km/h' . '<br>';
echo $bike->brake();


$vehicle->getCurrentSpeed = 0;
echo $vehicle->forward();
echo '<br> Vitesse de la voiture : ' . $vehicle->getCurrentSpeed . ' km/h' . '<br>';
echo $vehicle->brake();
echo '<br> Vitesse de la voiture : ' . $vehicle->getCurrentSpeed . ' km/h' . '<br>';
echo $vehicle->brake();

