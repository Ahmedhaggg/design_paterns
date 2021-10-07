<?php

namespace Paterns\Structural\Decorator;
use Paterns\Structural\Decorator\Sandwich;

class BasicSandwich implements Sandwich
{
    Const PRICE = 10;
    public function getPrice(): int
    {
        return self::PRICE;
    }
    public function getDetails(): string
    {
        return "bread and tomato";
    }

}