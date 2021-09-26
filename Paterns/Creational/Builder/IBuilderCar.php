<?php

namespace Paterns\Creational\Builder;

interface IBuilderCar {
     public function createCar();
     public function addEngine($engine);
     public function addBody($body);
     public function getCar();
}