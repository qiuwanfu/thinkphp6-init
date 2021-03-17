<?php
declare(strict_types=1);

namespace app\logic\user\v1;

use app\facade\UserRepository;
use app\logic\user\v1\request\IndexLogicRequest;
use app\logic\user\v1\response\IndexLogicResponse;

class IndexLogic
{
    protected $response;

    public function __construct(IndexLogicResponse $response)
    {
        $this->response = $response;
    }

    public function execute(IndexLogicRequest $request)
    {
        UserRepository::v1Index($request);
        return $this->response;
    }
}
