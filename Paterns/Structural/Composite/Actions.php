<?php

namespace Paterns\Structural\Composite;

interface Actions
{
    public function add($product);
    public function remove($product);
}