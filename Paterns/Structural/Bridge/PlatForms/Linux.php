<?php

namespace Paterns\Structural\Bridge\PlatForms;

use Paterns\Structural\Bridge\PlatForms\Platform;

class Linux implements Platform
{
    public function readFile(string $filename): string
    {
        return "this file : " . $filename . " contains ...... and file is reading by linux";
    }
    public function updateFileName(string $lastname, string $newName): string
    {
        return "new name of file : " . $lastname . " become : " . $newName . " and is updating by linux";
    }
}