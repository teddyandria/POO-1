<?php 

require_once 'Bicycle.php';
require_once 'Car.php';

$bike = new Bicycle('Blue');
$tesla = new Car('Red', 5, 30);


var_dump($bike);

$bike->getCurrentSpeed = 0;
var_dump($bike);

echo $bike->forward();
echo '<br> Vitesse du vélo : ' . $bike->getCurrentSpeed . ' km/h' . '<br>';
echo $bike->brake();
echo '<br> Vitesse du vélo : ' . $bike->getCurrentSpeed . ' km/h' . '<br>';
echo $bike->brake();



$tesla->getCurrentSpeed = 0;
echo $tesla->start();
echo $tesla->forward();
echo '<br> Vitesse de la voiture : ' . $tesla->getCurrentSpeed . ' km/h' . '<br>';
echo $tesla->brake();
echo '<br> Vitesse de la voiture : ' . $tesla->getCurrentSpeed . ' km/h' . '<br>';
echo $tesla->brake();

