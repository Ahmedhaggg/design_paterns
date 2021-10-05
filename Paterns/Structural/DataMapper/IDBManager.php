<?php

namespace Paterns\Structural\DataMapper;

interface IDBManager
{
    public function find($id);
    public function create(array $user) : bool;
}