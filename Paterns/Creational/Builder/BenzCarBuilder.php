<?php

namespace Paterns\Creational\Builder;

use Paterns\Creational\Builder\IBuilderCar;
use Paterns\Creational\Builder\Models\BenzCar;

class BenzCarBuilder implements IBuilderCar {
     private $carType;
     
     public function createCar() {
          
          $this->carType = new BenzCar();

     }
     public function addEngine($engine) {
          $this->carType->setPart("engine", $engine);
     }
     public function addBody($body) {
          $this->carType->setPart("body", $body);
     }
     public function getCar() {
          return $this->carType->getParts();
     }
}