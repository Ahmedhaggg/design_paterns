<?php

use PHPUnit\Framework\TestCase;
use Paterns\Structural\DataMapper\DataMapper;
use Paterns\Structural\DataMapper\User;
use Paterns\Structural\DataMapper\IDBManager;
use Paterns\Structural\DataMapper\DBManager;

class DataMapperTest extends TestCase
{
    private DataMapper $mapper;
    protected function setUp(): void
    {
        parent::setUp();
        $this->mapper = new DataMapper(new DBManager());
    }
    public function testCanCreateUser() {
        $newUser = new User();
        $newUser->setId("1");
        $newUser->setUsername("ahmed");
        $newUser->setPassword("1234");
        $this->assertEquals(true, $this->mapper->save($newUser));
    }
    public function testCanFindUser() {
        $this->testCanCreateUser();
        $this->assertEquals(["id" => 1, "username" => "ahmed", "password" => "1234"], $this->mapper->find("1"));
    }
}