<?php

use PHPUnit\Framework\TestCase;
Use Paterns\Structural\AdapterExample\UserLogin;
use Paterns\Structural\AdapterExample\BasicAuthAdapter;
use Paterns\Structural\AdapterExample\TokenAuthAdapter;

class AdapterExampleTest extends TestCase
{
    public function testLoginWithBasicAuth() {
        $basicAdapter = $this->createMock(BasicAuthAdapter::class);
        $basicAdapter->expects($this->once())
            ->method("login")
            ->willReturn("token : ahmed : 1234");
        $login = new UserLogin($basicAdapter);
        $login->login("ahmed", "1234");
    }
    public function testLoginWithTokenAuth() {
     $tokenAdapter = new TokenAuthAdapter();
     $userLogin = new UserLogin($tokenAdapter);
     $user = $userLogin->login("ahmed", "1234");
     $this->assertEquals("token : ahmed : 1234", $user);
    }
}