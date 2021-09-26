<?php 

namespace Paterns\Creational\AbstractFactory;


use Paterns\Creational\AbstractFactory\Icar;

class BMCar implements Icar {

     private $price;

     public function __construct($price) {
          $this->price = $price;
     }
     public function getPrice() {
          return $this->price;
     }
}