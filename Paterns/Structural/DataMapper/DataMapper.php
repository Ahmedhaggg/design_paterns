<?php

namespace Paterns\Structural\DataMapper;
use Paterns\Structural\DataMapper\IDBManager;
use Paterns\Structural\DataMapper\User;
class DataMapper
{
    private IDBManager $manager;
    public function __construct(IDBManager $manager)
    {
        $this->manager = $manager;
    }

    public function save(User $user) : bool {
        return $this->manager->create([
            "id" => $user->getId(), "username" => $user->getUsername(), "password" => $user->getPassword()
        ]);
    }
    public function find($id) {
        return $this->manager->find($id);
    }

}