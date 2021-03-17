<?php
declare (strict_types = 1);

namespace app\repository;

use app\model\User;

class UserRepository extends Repository
{
    protected function model(): string
    {
        return User::class;
    }
}
