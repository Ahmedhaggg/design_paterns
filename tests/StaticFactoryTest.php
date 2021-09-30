<?php

use PHPUnit\Framework\TestCase;
use Paterns\Creational\StaticFactory\DeviceFactory;
use Paterns\Creational\StaticFactory\Devices\Device;
use Paterns\Creational\StaticFactory\Devices\Dell;
use Paterns\Creational\StaticFactory\Devices\Hp;
use Paterns\Creational\StaticFactory\Devices\Lenovo;


class StaticFactoryTest extends TestCase
{
    public function testCanCreateDellDevice() {
         $newDevice = DeviceFactory::create("dell");
         $this->assertInstanceOf(Dell::class, $newDevice);
    }
    public function testCanCreateHpDevice() {
        $newDevice = DeviceFactory::create("hp");
        $this->assertInstanceOf(Hp::class, $newDevice);
    }
    public function testCanCreateLenovoDevice() {
        $newDevice = DeviceFactory::create("lenovo");
        $this->assertInstanceOf(Lenovo::class, $newDevice);
    }
}