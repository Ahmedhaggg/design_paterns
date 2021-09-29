<?php

namespace Paterns\Creational\Prototype;

use Paterns\Creational\Prototype\EmployeePrototype;

class RegEmployee extends EmployeePrototype
{
    public function copy()
    {
        $newEmplyee = new RegEmployee();
        $newEmplyee->setInfo($this->name, $this->id, $this->rule);
        return $newEmplyee;
    }

}