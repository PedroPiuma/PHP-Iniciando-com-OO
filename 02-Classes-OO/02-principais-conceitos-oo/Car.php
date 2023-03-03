<?php

class Car
{
    public $brand;
    public $color;
    public $engine;

    public function getEngine(string $type = 'horsepower')
    /** Método da classe / Função da classe
     *  $type é a assinatura do método
     *  string faz a tipado do parâmetro para ser apenas string
     *  = atribui ao parâmetro o valor 'horsepower' quando não existe
     *  parâmetro passado no método.
     */
    {
        return "$this->engine $type";
        /**
         * $this refere-se ao objeto instanciado da classe,
         * podendo fornecer acesso a suas popriedrades com
         * o operador ( -> );
         * Dessa maneira o $this acima fornece acesso a 
         * propriedade engine do objeto instanciado,
         * retornando o valor atribuido ao $engine.
         */
    }
}
