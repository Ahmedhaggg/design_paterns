<?php

use Paterns\Creational\Prototype\RegEmployee;
use PHPUnit\Framework\TestCase;

class PrototypeTest extends TestCase
{
    public function testCanDeepCopyObject() {
        $regularEmployee = new RegEmployee();
        $regularEmployee->setInfo("ahmed", 1, "user");
        $regularEmployee2 = $regularEmployee->copy();
        $this->assertSame($regularEmployee2, $regularEmployee);
        // get false
    }
    public function testCanShallowObject() {
        $regularEmployee = new RegEmployee();
        $regularEmployee2 = $regularEmployee;
        $this->assertSame($regularEmployee2, $regularEmployee);
        // get true
    }
}