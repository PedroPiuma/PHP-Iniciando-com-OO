<?php

require_once('Vehicle.php');

class Car extends Vehicle
{
    // public $doors;
    /** public:
     *  Dessa maneira, usando public $doors, é possível
     *  acessar a variável $doors no arquivo index.php,
     *  logo, que $doors é public.
     * 
     */

    private $doors;
    /** private:
     *  Nessa situação, geraria um erro, pois, está sendo
     *  acessado a propriedade $doors no arquivo index.php.
     *  Isso ocorre porque ao usar private, a variável $doors
     *  fica privada para uso externo. 
     */

    public function setDoors($doors)
    {
        $this->doors = $doors;
    }

    public function getDoors()
    {
        return $this->doors;
    }
}
