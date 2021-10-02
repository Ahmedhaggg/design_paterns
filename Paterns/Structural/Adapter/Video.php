<?php

namespace Paterns\Structural\Adapter;

use Paterns\Structural\Adapter\MediaPlayers\IPlayer;

class Video
{
    private IPlayer $player;

    public function __construct(IPlayer $player)
    {
        $this->player = $player;
    }
    public function play() : string {
        return $this->player->play();
    }
}