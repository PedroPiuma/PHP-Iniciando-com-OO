<?php

/**
 * Classes:
 * - Classe é o molde de um objeto concreto.
 */

class People
{
    public function getName($name) // Método public getName
    {
        $arraySplit = explode('u', $name);
        return "Hello " . $arraySplit[count($arraySplit) - 1] + "\n\n";
    }

    public function getBye($value)
    {
        return 'Bye' . $this->getName($value);
    }
}

// Maneira errada:
// $p = new People('Luís Pedro'); 
// echo $p.getName();

// Jeito certo:
$p1 = new People;
echo $p1->getName('Luis Pedro');

$p2 = new People;
echo $p2->getName('Luis Gustavo');


function teste()
{
    print_r('teste');
}
teste();
