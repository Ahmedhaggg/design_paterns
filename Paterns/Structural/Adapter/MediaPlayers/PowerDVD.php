<?php

namespace Paterns\Structural\Adapter\MediaPlayers;

use Paterns\Structural\Adapter\MediaPlayers\IPowerDVD;

class PowerDVD implements IPowerDVD
{
    public function turnOn(): string
    {
        return "video is play success";
    }
}