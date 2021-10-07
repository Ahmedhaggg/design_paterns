<?php

namespace Paterns\Structural\Decorator;
use Paterns\Structural\Decorator\Sandwich;

class SandwichDecorator implements Sandwich
{
    private Sandwich $sandwich;
    public function __construct(Sandwich $sandwich)
    {
        $this->sandwich = $sandwich;
    }
    public function getPrice(): int
    {
        return $this->sandwich->getPrice();
    }
    public function getDetails(): string
    {
        return $this->getDetails();
    }

}