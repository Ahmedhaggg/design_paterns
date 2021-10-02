<?php

namespace Paterns\Structural\Adapter\MediaPlayers;

use Paterns\Structural\Adapter\MediaPlayers\IPlayer;

class VLC implements IPlayer
{
    public function play(): string
    {
        return "video is play success";
    }
}