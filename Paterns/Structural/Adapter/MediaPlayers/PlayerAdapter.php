<?php

namespace Paterns\Structural\Adapter\MediaPlayers;

use Paterns\Structural\Adapter\MediaPlayers\IPlayer;

class PlayerAdapter implements IPlayer
{
    private IPowerDVD $VideoPlayer;
    public function __construct(IPowerDVD $powerDVD)
    {
        $this->VideoPlayer = $powerDVD;
    }
    public function play(): string
    {
        return $this->VideoPlayer->turnOn();
    }
}