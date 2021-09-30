<?php

namespace Paterns\Creational\SimpleFactory;

class Device
{
    private string $name;
    private \DateTime $createdAt;
    private int $price;

    public function __construct(string $name, \DateTime $createdAt, int $price)
    {
        $this->name = $name;
        $this->createdAt = $createdAt;
        $this->price = $price;
    }
}