<?php

namespace Paterns\Structural\Composite;

use Paterns\Structural\Composite\IProdcut;

class SmallBox implements IProdcut
{
    private array $products;

    public function __construct(array $products)
    {
        $this->products = $products;
    }

    public function getPrice(): int
    {
        $totalPrice = 0;
        foreach ($this->products as $product) {
            $totalPrice += $product->getPrice();
        }
        return $totalPrice;
    }
}