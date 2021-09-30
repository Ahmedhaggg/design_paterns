<?php

namespace Paterns\Creational\StaticFactory\Devices;

use Paterns\Creational\StaticFactory\Devices\Device;

class Lenovo implements Device
{
    private $name ;
    public function __construct()
    {
        $this->name = "lenovo";
    }

    public function getInfo(): array
    {
        return $this->name;
        // TODO: Implement getInfo() method.
    }
}