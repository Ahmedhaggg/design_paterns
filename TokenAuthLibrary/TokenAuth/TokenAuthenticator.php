<?php
namespace TokenAuth;

class TokenAuthenticator
{
    private string $name;
    private string $password;

    public function __construct(string $name, string $password)
    {
        $this->name = $name;
        $this->password = $password;
    }
    public function tokenLogin() : string {
        return "token : " . $this->name . " : " . $this->password;
    }
}