<?php

namespace Paterns\Structural\AdapterExample;

use JetBrains\PhpStorm\Pure;
use Paterns\Structural\AdapterExample\IAuthAdapter;
use TokenAuth\TokenAuthenticator;

class TokenAuthAdapter implements IAuthAdapter
{
    #[Pure] public function login(string $name, string $password): string
    {
        $auth = new TokenAuthenticator($name, $password);
        return $auth->tokenLogin();
    }
}