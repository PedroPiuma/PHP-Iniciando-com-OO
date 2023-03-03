<?php
require_once("Car.php");
require_once("Motorcycle.php");

$ferrari = new Car('Ferrari', 'red');
$ferrari->engine = 488;
$ferrari->setDoors(2);

$mustang = new Car('Mustang', 'Yellow');
$mustang->engine = 300;
// $mustang->doors = 4;
/** Dessa maneira não é possível passar o valor da variável,
 * logo que, doors é como private.
 */
$mustang->setDoors(4);

$m = new Motorcycle('Honda', 'Blue');
$m->engine = 150;

// echo $mustang->doors;
/** Dessa maneira, mesmo que a propriedade possa ser setada 
 * através do método criado setDoors(), a propriedade 
 * $doors continua sendo privada, não sendo possível acessar
 * de maneira simples. Por isso, cria-se um novo método
 * responsável por captura essa variável privada e retorna 
 * por meio da função.
 */
echo $mustang->getDoors();
/** Forma correta usando método específico para acesso
 *  de propriedade/variável privada


