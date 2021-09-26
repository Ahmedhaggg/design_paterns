<?php

namespace Paterns\Creational\Builder\Models;


interface Icar {
     public function setPart($part, $value);
     public function getParts();
}