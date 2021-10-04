<?php

use PHPUnit\Framework\TestCase;
use Paterns\Structural\Bridge\Application;

class BridgeTest extends TestCase
{

    public function testCanReadFileInWindows() {
        $app = new Application("win");
        $fileContent = $app->readFile("test");
        $this->assertEquals("this file : test contains ...... and file is reading by windows", $fileContent);
    }
    public function testCanUpdateFileInWindows() {
        $app = new Application("win");
        $fileContent = $app->UpdateFile("test", "newtest");
        $this->assertEquals("new name of file : test become : newtest and is updating by windows", $fileContent);
    }
    public function testCanReadFileInLinux() {
        $app = new Application("linux");
        $fileContent = $app->readFile("test");
        $this->assertEquals("this file : test contains ...... and file is reading by linux", $fileContent);
    }
    public function testCanUpdateFileInLinux() {
        $app = new Application("linux");
        $fileContent = $app->UpdateFile("test", "newtest");
        $this->assertEquals("new name of file : test become : newtest and is updating by linux", $fileContent);
    }
}