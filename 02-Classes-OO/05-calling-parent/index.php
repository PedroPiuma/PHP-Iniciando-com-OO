<?php
require_once("Car.php");
require_once("Motorcycle.php");

$ferrari = new Car('Ferrari', 'red');
$ferrari->engine = 488;
$ferrari->doors = 2;

$mustang = new Car;
$mustang->brand = 'Mustang';
$mustang->color = 'Yellow';
$mustang->engine = 300;
$mustang->doors = 4;

$m = new Motorcycle('Honda', 'Blue');
$m->engine = 150;


echo "echo: " . $m->brand;
echo $m->color;
