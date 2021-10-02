<?php

namespace Paterns\Structural\AdapterExample;

use JetBrains\PhpStorm\Pure;
use Paterns\Structural\AdapterExample\IAuthAdapter;
use BasicAuth\BasicAuthenticator;

class BasicAuthAdapter implements IAuthAdapter
{
    public function login(string $name, string $password): string
    {
        $basicAuth = new BasicAuthenticator($name, $password);
        return $basicAuth->basicLogin();
    }

//    public function login(string $name, string $password ): string
//    {
//        $basicAuth = new BasicAuthenticator($name, $password);
//        return $basicAuth->basicLogin();
//    }
}