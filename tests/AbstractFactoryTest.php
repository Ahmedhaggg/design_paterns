<?php

use PHPUnit\Framework\TestCase;
use Paterns\Creational\AbstractFactory\AbstractFactory;
use Paterns\Creational\AbstractFactory\BMCar;
use Paterns\Creational\AbstractFactory\JEEPCar;

class AbstractFactoryTest extends TestCase {
     
     public function testCanGetBmwCar() {
          $carsFactory = new AbstractFactory(20);
          $newCar = $carsFactory->getBmwCar();

          $this->assertInstanceOf(expected: BMCar::class, actual: $newCar);
     }
     public function testJeepCar() {
          $carsFactory = new AbstractFactory(20);
          $newCar = $carsFactory->getJEEPCar();

          $this->assertInstanceOf(expected: JEEPCar::class, actual: $newCar, message: "don't return instance of JEEP");
     }
}