<?php

abstract class Vehicle
/** abstract class:
 *  É o model/template para criar as demais classes;
 *  Não deve ser usado instanciado com new Vehicle, por exemplo.
 */
{
    public $brand;
    protected $color;
    public $engine;

    public function __construct($brand = null, $color = null)
    {
        $this->brand = $brand;
        $this->color = $color;
    }

    public function getEngine(string $type = 'horsepower')
    {
        return "$this->engine $type";
    }

    abstract public function getBrand();
}
