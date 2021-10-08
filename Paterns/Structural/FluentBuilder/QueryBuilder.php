<?php

namespace Paterns\Structural\FluentBuilder;
use Paterns\Structural\FluentBuilder\IQueryBuilder;

class QueryBuilder implements IQueryBuilder
{
    private array $fields;
    private array $conditions;
    private string $table;

    public function select(array $fields): IQueryBuilder
    {
        $this->fields = $fields;
        return $this;
    }

    public function from(string $table): IQueryBuilder
    {
        $this->table = $table;
        return $this;
    }

    public function where(array $conditions): IQueryBuilder
    {
        $this->conditions = $conditions;
        return $this;
    }

    public function getStmt(): string
    {
        return sprintf(
            "SELECT %s FROM %s WHERE %s",
            implode(", ", $this->fields),
            $this->table,
            implode("AND", $this->conditions)
        );
    }

}