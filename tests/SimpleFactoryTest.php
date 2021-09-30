<?php

use PHPUnit\Framework\TestCase;
use Paterns\Creational\SimpleFactory\SimpleFactory;
use Paterns\Creational\SimpleFactory\Device;
class SimpleFactoryTest extends TestCase
{
    public function testCanCreateDevice() {
        $factory = new SimpleFactory();
        $newDevice = $factory->createDevice("samsung", new DateTime(), 200);
        $this->assertInstanceOf(Device::class, $newDevice);
    }
}