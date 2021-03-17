<?php
declare(strict_types=1);

namespace app\logic;

use app\facade\UserRepository;

class V1ReadUserLogic
{
    public function execute(int $id)
    {
        return UserRepository::v1Index();
    }
}
