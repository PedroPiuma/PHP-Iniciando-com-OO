<?php
require_once("Car.php");
require_once("Motorcycle.php");

$ferrari = new Car('Ferrari', 'red');
// $ferrari->brand = 'Ferrari';
// $ferrari->color = 'Red';
$ferrari->engine = 488;
$ferrari->doors = 2;

echo $ferrari->brand;
