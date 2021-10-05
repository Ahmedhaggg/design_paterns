<?php

use PHPUnit\Framework\TestCase;
use Paterns\Structural\Composite\SmallBox;
use Paterns\Structural\Composite\BigBox;
use Paterns\Structural\Composite\Product;


class CompositeTest extends TestCase
{
    public function testCanGetBigBoxPrice() {
        $product1 = new Product(200);
        $product2 = new Product(300);
        $product3 = new Product(400);
        $smallBox = new SmallBox([$product2, $product3]);
        $bigBox = new BigBox([$product1, $product2, $product3, $smallBox]);
        $this->assertEquals(1600, $bigBox->getPrice());
    }

}