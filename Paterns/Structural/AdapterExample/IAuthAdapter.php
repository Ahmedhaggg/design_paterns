<?php

namespace Paterns\Structural\AdapterExample;

interface IAuthAdapter
{
    public function login(string $name, string $password) : string;
}