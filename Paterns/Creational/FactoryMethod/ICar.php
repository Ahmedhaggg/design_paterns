<?php

namespace Paterns\Creational\FactoryMethod;

use PhpParser\Builder\Interface_;

Interface ICar
{
    public function getBrand() : string;
}