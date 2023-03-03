<?php

class Vehicle
{
    public $brand;
    public $color;
    public $engine;

    public function getEngine(string $type = 'horsepower')
    {
        return "$this->engine $type";
    }
}
