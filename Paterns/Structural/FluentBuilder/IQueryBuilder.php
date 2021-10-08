<?php

namespace Paterns\Structural\FluentBuilder;

interface IQueryBuilder
{
    public function select(array $fields) : IQueryBuilder;
    public function from(string $table) : IQueryBuilder;
    public function where(array $conditions) : IQueryBuilder;
    public function getStmt() : string;
}