<?php
declare (strict_types = 1);

namespace app\facade;

use think\Facade;

class UserRepository extends Facade
{
    protected static function getFacadeClass()
    {
        return \app\repository\UserRepository::class;
    }
}
