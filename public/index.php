<?php

require_once "../vendor/autoload.php";


use Paterns\Creational\AbstractFactory\AbstractFactory;
use Paterns\Creational\Builder\CarProducer;
use Paterns\Creational\Builder\BenzCarBuilder;

$car = new  CarProducer(new BenzCarBuilder());
var_dump($car->produce(["engine" => "ddkdjk", "body" => "bodynew"]));
