<?php

namespace Paterns\Creational\FactoryMethod;

use Paterns\Creational\FactoryMethod\ICar;

class BmwCar implements ICar
{
    public function getBrand(): string
    {
        return  "Bmw";
    }
}