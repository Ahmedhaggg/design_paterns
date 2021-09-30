<?php

namespace Paterns\Creational\SimpleFactory;

use Paterns\Creational\SimpleFactory\Device;

class SimpleFactory
{
    public function createDevice(string $name, \DateTime $createdAt, int $price) {
        return new Device($name, $createdAt, $price);
    }
}