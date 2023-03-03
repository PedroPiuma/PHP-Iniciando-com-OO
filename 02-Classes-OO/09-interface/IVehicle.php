<?php

interface IVehicle
// interface é usada para criar padrões para as classes
{
    public function getEngine(string $type = 'horsepower');
    // abstract function getBrand(); ??????????? no working
    public function getBrand();
    public function getColor();
}
