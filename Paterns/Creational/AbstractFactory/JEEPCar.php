<?php

namespace Paterns\Creational\AbstractFactory;
use Paterns\Creational\AbstractFactory\Icar;


class JEEPCar {

     private $price;
     private $tax = 1000;

     public function __construct($price) {
          $this->price = $price;
     }
     public function getPrice() {
          return $this->price + $this->tax;
     }


}