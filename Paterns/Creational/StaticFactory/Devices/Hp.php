<?php

namespace Paterns\Creational\StaticFactory\Devices;

use Paterns\Creational\StaticFactory\Devices\Device;

class Hp implements Device
{
    private $name ;
    public function __construct()
    {
        $this->name = "hp";
    }

    public function getInfo(): array
    {
        return $this->name;
        // TODO: Implement getInfo() method.
    }
}