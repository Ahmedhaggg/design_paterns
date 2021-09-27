<?php

namespace Paterns\Creational\FactoryMethod;
use Paterns\Creational\FactoryMethod\ICar;
interface IBrandFactory
{
    public function build() : ICar;
}