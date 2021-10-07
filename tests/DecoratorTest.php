<?php

use PHPUnit\Framework\TestCase;
use Paterns\Structural\Decorator\BasicSandwich;
use Paterns\Structural\Decorator\BeefSandwich;
use Paterns\Structural\Decorator\CheeseSandwich;

class DecoratorTest extends TestCase
{
    public function testPriceOfBasicSandwich()  {
        $basicSandwich = new BasicSandwich();
        $this->assertEquals(10, $basicSandwich->getPrice());
    }
    public function testPriceOfBeefSandwich()  {
        $beefSandwich = new BeefSandwich(new BasicSandwich());
        $this->assertEquals(30, $beefSandwich->getPrice());
    }
    public function testPriceOfBeefWithCheeseSandwich() {
        $sandwich =  new BeefSandwich(new CheeseSandwich(new BasicSandwich()));
        $this->assertEquals(50, $sandwich->getPrice());
    }
}