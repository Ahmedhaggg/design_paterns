<?php

use Paterns\Creational\Builder\BmwCarBuilder;
use Paterns\Creational\Builder\BenzCarBuilder;
use Paterns\Creational\Builder\CarProducer;

use PHPUnit\Framework\TestCase;

class BuilderTest extends TestCase {
     
     public function testCanProduceCar() {
          $carProducer = new CarProducer(new BmwCarBuilder);
          $result = $carProducer->produce([
               "engine" => "nbjjhjh",
               "body" => "newBody" 
          ]);
          $this->assertIsArray($result, "isn't array");
     }
     public  function testCanProduceBenzCar() {
         $carProducer = new  CarProducer(new BenzCarBuilder());
         $result = $carProducer->produce([
             "engine" => "benz engine",
             "body" => "newBody"
         ]);
         $this->assertIsArray($result, message: "benz car don't complety");
     }
}