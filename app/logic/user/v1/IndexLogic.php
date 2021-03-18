<?php
declare(strict_types=1);

namespace app\logic\user\v1;

use app\logic\user\v1\request\IndexLogicRequest;
use app\logic\user\v1\response\IndexLogicResponse;
use app\repository\user\request\IndexRepositoryRequest;
use app\repository\user\IndexRepository;
use Exception;

class IndexLogic
{
    /**
     * @param IndexLogicRequest $request
     * @return IndexLogicResponse
     * @throws Exception
     */
    public static function execute(IndexLogicRequest $request)
    {
        $indexRepositoryRequest = new IndexRepositoryRequest();
        $indexRepositoryRequest->setPage($request->getPage());
        $indexRepositoryRequest->setPageSize($request->getPageSize());
        $indexRepositoryResponse = IndexRepository::execute($indexRepositoryRequest);
        $response = new IndexLogicResponse();
        $response->setPage($indexRepositoryResponse->getPage());
        $response->setPageSize($indexRepositoryResponse->getPageSize());
        return $response;
    }
}
