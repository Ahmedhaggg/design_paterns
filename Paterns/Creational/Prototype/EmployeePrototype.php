<?php

namespace Paterns\Creational\Prototype;

abstract class EmployeePrototype
{
    protected string $name;
    protected int $id;
    protected string $rule;

    public function setInfo($name, $id, $rule): void
    {
        $this->name = $name;
        $this->id = $id;
        $this->rule = $rule;
    }

    public function getInfo(): array
    {
        return [
            "name" => $this->name,
            "id" => $this->id,
            "rule" => $this->rule
        ];
    }

    abstract public function copy();
}