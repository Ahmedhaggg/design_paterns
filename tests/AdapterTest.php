<?php

use PHPUnit\Framework\TestCase;
use Paterns\Structural\Adapter\Video;
use Paterns\Structural\Adapter\MediaPlayers\PlayerAdapter;
use Paterns\Structural\Adapter\MediaPlayers\VLC;
use Paterns\Structural\Adapter\MediaPlayers\PowerDVD;

class AdapterTest extends TestCase
{
    public function testCanPlayVideoUsingVlC() {
        $video = new Video(new VLC());
        $this->assertEquals("video is play success", $video->play());
    }
    public function testCanPlayVideoUsingPowerDVDAdapter() {
        $adapter = new PlayerAdapter(new powerDVD());
        $video = new Video($adapter);
        $this->assertEquals("video is play success", $video->play());
    }
}