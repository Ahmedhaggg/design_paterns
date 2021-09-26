<?php

namespace Paterns\Creational\Builder\Models;

use Paterns\Creational\Builder\Models\Icar;

class BmwCar implements Icar {
     
     private array $car = [];
     public function setPart($part, $value) {
          $this->car[$part] = $value;
     }
     public function getParts() {
          return $this->car;
     }
}