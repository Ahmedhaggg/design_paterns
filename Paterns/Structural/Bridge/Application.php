<?php

namespace Paterns\Structural\Bridge;
use Paterns\Structural\Bridge\PlatForms\Linux;
use Paterns\Structural\Bridge\PlatForms\Platform;
use Paterns\Structural\Bridge\PlatForms\Windows;

class Application
{
    private Platform $platform;

    public function __construct(string $os)
    {
        $this->platform = $this->getPlatform($os);
    }
    public function readFile($filename) : string
    {
        return $this->platform->readFile($filename);
    }
    public function updateFile(string $lastname, string $newname) : string {
        return $this->platform->updateFileName($lastname, $newname);
    }

    private function getPlatform($os) {
        if ($os === "win") {
            return new Windows();
        } {
            return new Linux();
        }
    }
}