<?php

namespace Paterns\Creational\FactoryMethod;

use Paterns\Creational\FactoryMethod\IBrandFactory;
use Paterns\Creational\FactoryMethod\BenzCar;
class BenzBrandFactory implements IBrandFactory
{
    public function build(): ICar
    {
        return  new BenzCar();
    }
}