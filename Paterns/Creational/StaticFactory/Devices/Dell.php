<?php

namespace Paterns\Creational\StaticFactory\Devices;
use Paterns\Creational\StaticFactory\Devices\Device;

class Dell implements Device
{
    private $name ;
    public function __construct()
    {
        $this->name = "dell";
    }

    public function getInfo(): array
    {
        return $this->name;
        // TODO: Implement getInfo() method.
    }
}