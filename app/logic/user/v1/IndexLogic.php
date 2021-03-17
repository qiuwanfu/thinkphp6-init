<?php
declare(strict_types=1);

namespace app\logic\user\v1;

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
        dd($request->getPage());
        return $this->response;
    }
}
