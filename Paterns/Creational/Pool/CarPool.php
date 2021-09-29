<?php

namespace Paterns\Creational\Pool;
use Paterns\Creational\Pool\Car;

class CarPool
{
    private $busyCars = [];
    private $freeCars = [];
    private $cars = [];

    public function __construct()
    {
        for ($i = 1; $i < 10; $i++) {
            $car = new Car();
            $this->cars[$i] = $car;
        }
        $this->freeCars = $this->cars;
    }
    public function getCars() : array {
        return  $this->cars;
    }
    public function rentCar(int $carId) {
        if (array_key_exists($carId, $this->busyCars)) {
            return "can't rent this car becouse it's busy";
        }
        unset($this->freeCars[$carId]);
        $this->busyCars[$carId] = $this->cars[$carId];
        return  $this->cars[$carId];
    }
    public function freeCar(int $carId) {
        if (!array_key_exists($carId, $this->busyCars)) {
            return "can't free this car because it's not busy";
        }
        unset($this->busyCars[$carId]);
        $this->freeCars[$carId] = $this->cars[$carId];
        return true;
    }
    public function carsNumber() {
        return count($this->busyCars) + count($this->freeCars);
    }

}