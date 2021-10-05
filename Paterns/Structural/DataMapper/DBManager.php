<?php

namespace Paterns\Structural\DataMapper;
use Paterns\Structural\DataMapper\IDBManager;

class DBManager implements IDBManager
{
    private array $users = [];

    public function find($id) {

        foreach ($this->users as $user) {
            if ($user["id"] === $id)
                return $user;
        }
        return false;
    }
    public function create(array $user) : bool {
        if ($this->find($user["id"]))
            return false;

        $this->users [] = $user;
        return true;
    }

}