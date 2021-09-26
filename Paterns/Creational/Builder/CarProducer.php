<?php

namespace Paterns\Creational\Builder;



class CarProducer {

     private $carBuilder;

     public function __construct(IBuilderCar $builder)
     {
          $this->carBuilder = $builder;
     }

     public function produce($data) {
          $this->carBuilder->createCar();
          $this->carBuilder->addEngine($data["engine"]);
          $this->carBuilder->addBody($data["body"]);
          return $this->carBuilder->getCar();
     }
}