<?php

namespace Paterns\Creational\AbstractFactory;

use Paterns\Creational\AbstractFactory\BMWCar;
use Paterns\Creational\AbstractFactory\JEEPCar;


class  AbstractFactory {

     private $price;

     public function __construct($price) {
          $this->price = $price;
     }
     public function getBmwCar() {
          return new BMCar($this->price);
     }
     public function getJEEPCar() {
          return new JEEPCar($this->price);
     }
}