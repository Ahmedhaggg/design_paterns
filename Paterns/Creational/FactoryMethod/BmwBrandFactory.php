<?php

namespace Paterns\Creational\FactoryMethod;

use Paterns\Creational\FactoryMethod\IBrandFactory;
use  Paterns\Creational\FactoryMethod\BmwCar;

class BmwBrandFactory implements IBrandFactory
{
    public function build(): ICar
    {
        return new BmwCar();
    }
}