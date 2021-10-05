<?php

namespace Paterns\Structural\Composite;

use Paterns\Structural\Composite\Actions;
use Paterns\Structural\Composite\IProdcut;

class BigBox implements IProdcut,Actions
{
    private array $products;

    public function __construct($products)
    {
        $this->products = $products;
    }

    public function add($product)
    {
        array_push($this->products, $product);
    }
    public function remove($product)
    {
        unset($this->products[$product]);
    }

    public function getPrice() : int
    {
        $totalPrice = 0;
        foreach ($this->products as $product) {
            $totalPrice += $product->getPrice();
        }
        return $totalPrice;
    }
}