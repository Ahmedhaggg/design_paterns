<?php

use Paterns\Creational\FactoryMethod\BenzBrandFactory;
use Paterns\Creational\FactoryMethod\BmwBrandFactory;
use Paterns\Creational\FactoryMethod\BenzCar;
use Paterns\Creational\FactoryMethod\BmwCar;
use PHPUnit\Framework\TestCase;

class FactoryMethodTest extends TestCase
{
    public function testCanGetBenzBrand() {
        $factory = new  BenzBrandFactory();
        $benzBrand = $factory->build();
        $this->assertInstanceOf(expected: BenzCar::class, actual:  $benzBrand);
    }
    public function testCanGetBmwBrand() {
        $factory = new  BmwBrandFactory();
        $bmwBrand = $factory->build();
        $this->assertInstanceOf(expected: BmwCar::class, actual:  $bmwBrand, message: "can't get bmw car");
    }
}