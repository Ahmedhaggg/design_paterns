<?php

namespace Paterns\Structural\Decorator;

interface Sandwich
{
    public function getPrice() : int;
    public function getDetails() : string;
}