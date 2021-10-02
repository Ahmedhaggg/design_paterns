<?php

namespace BasicAuth;

class BasicAuthenticator
{
    private string $name;
    private string $password;

    public function __construct(string $name, string $password)
    {
        $this->name = $name;
        $this->password = $password;
    }
    public function basicLogin() : string {
        return "basic : " . $this->name . " : " . $this->password;
    }
}