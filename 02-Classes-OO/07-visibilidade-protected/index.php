<?php
require_once("Car.php");
require_once("Motorcycle.php");

$ferrari = new Car('Ferrari', 'red');
$ferrari->engine = 488;
$ferrari->setDoors(2);

$mustang = new Car('Mustang', 'Yellow');
$mustang->engine = 300;
$mustang->setDoors(4);

$m = new Motorcycle('Honda', 'Blue');
$m->engine = 150;

// echo $m->color;
/** Não é possível acessar a propriedade color, 
 *  porque é uma variável protect na Class Vehicle,
 *  desse jeito o usuário não pode acessar diretamente
 *  essa variável.
 * 
 *  Mas a Class Motorcycle pode acessar a variável protected
 *  de seu parent, assim, é possível ver pelo echo a $color
 *  que está sendo chamada no arquivo Motorcyle, quando sua
 *  classe é instanciada na variável $m do arquivo atual.
 */
