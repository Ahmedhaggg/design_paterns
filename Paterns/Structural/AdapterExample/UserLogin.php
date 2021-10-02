<?php

namespace Paterns\Structural\AdapterExample;
use Paterns\Structural\AdapterExample\IAuthAdapter;

class UserLogin
{
    private IAuthAdapter $adapter;

    public function __construct(IAuthAdapter $adapter)
    {
        $this->adapter = $adapter;
    }
    public function login(string $name, string $password) : string {
        return $this->adapter->login($name, $password);
    }
}