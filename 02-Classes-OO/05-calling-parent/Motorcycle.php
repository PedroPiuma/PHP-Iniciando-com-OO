<?php

require_once('Vehicle.php');

class Motorcycle extends Vehicle
{
    public function __construct($brand = null, $color = null)
    /** Esse construtor sobreescrever completamente o contrutor de Vehicle;
     *  Dessa maneira, para que apenas a color fiquei toda maiúscula,
     *  é necessário fazer da seguinte maneira:
     * { 
     *  $this->brand = $brand;
     *  $this->color =  strtoupper($color);
     * }
     */
    {
        parent::__construct($brand, strtoupper($color));
        /** --Calling parent: Reutilizando o método construtor de herança do parent;--
         *  parent refere-se a class Vehicle;
         *  Operador :: acessa o método __construct de parent;
         *  Por sua vez, o construct herdado deve ter dois parâmetros ($brand, $color);
         *  E dessa forma, é alterado o parâmetro $color usando a função strtoupper();
         *  A função strtoupper() deixa a string em uppercase (Maiúscula);
         *  Então, para veículos do tipo moto, as cores serão apresentadas em uppercase.
         */
    }
}
