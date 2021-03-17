<?php
declare(strict_types=1);

namespace app\logic;

use app\facade\UserRepository;

class V1SaveUserLogic
{
    public function execute()
    {
        return UserRepository::v1Index();
    }
}
