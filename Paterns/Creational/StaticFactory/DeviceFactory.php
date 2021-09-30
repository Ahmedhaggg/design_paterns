<?php

namespace Paterns\Creational\StaticFactory;
use Paterns\Creational\StaticFactory\Devices\Dell;
use Paterns\Creational\StaticFactory\Devices\Hp;
use Paterns\Creational\StaticFactory\Devices\Lenovo;

class DeviceFactory
{
    public static function create(string $type) {
        switch ($type) {
            case "dell" : return new Dell();
            case "hp" : return new Hp();
            case "lenovo" : return new Lenovo();
            default : return null;
        }
    }

}