<?php

namespace Paterns\Structural\Composite;
use Paterns\Structural\Composite\IProdcut;

class Product implements IProdcut
{
    private int $price;

    public function __construct($price)
    {
        $this->price = $price;
    }

    public function getPrice() : int
    {
        return $this->price;
    }
}