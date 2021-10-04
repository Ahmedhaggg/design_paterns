<?php

namespace Paterns\Structural\Bridge\PlatForms;

interface Platform
{
    public function readFile(string $filename) : string;
    public function updateFileName(string $lastname, string $newName) : string;
}