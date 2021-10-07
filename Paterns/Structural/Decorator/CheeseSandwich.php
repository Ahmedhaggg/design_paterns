<?php

namespace Paterns\Structural\Decorator;

use Paterns\Structural\Decorator\SandwichDecorator;

class CheeseSandwich extends SandwichDecorator
{
    Const PRICE = 20;
    Const NAME = "cheese";
    public function __construct(Sandwich $sandwich)
    {
        parent::__construct($sandwich);
    }
    public function getPrice(): int
    {
        return parent::getPrice() + SELF::PRICE;
    }
    public function getDetails(): string
    {
        return parent::getDetails() . " and " . self::NAME;
    }
}