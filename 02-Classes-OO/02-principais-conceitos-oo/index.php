<?php
require_once("Car.php");

$ferrari = new Car;
$ferrari->brand = 'Ferrari';
$ferrari->color = 'Red';
$ferrari->engine = 488;

$mustang = new Car;
$mustang->brand = 'Mustang';
$mustang->color = 'Yellow';
$mustang->engine = 300;

echo $mustang->getEngine();
