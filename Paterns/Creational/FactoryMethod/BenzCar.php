<?php

namespace Paterns\Creational\FactoryMethod;

use Paterns\Creational\FactoryMethod\ICar;

class BenzCar implements ICar
{
    public function getBrand(): string
    {
        return "benzine";
    }
}