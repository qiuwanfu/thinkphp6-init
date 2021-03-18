<?php
declare(strict_types=1);

namespace app\repository\user;

use app\model\User;
use app\repository\user\request\IndexRepositoryRequest;
use app\repository\user\request\IndexRepositoryResponse;
use Exception;

class IndexRepository
{
    /**
     * @param IndexRepositoryRequest $request
     * @return IndexRepositoryResponse
     * @throws Exception
     */
    public static function execute(IndexRepositoryRequest $request): IndexRepositoryResponse
    {
        $model = User::field('id')
            ->paginate(['page' => $request->getPage(), 'list_rows' => $request->getPageSize()]);
        $response = new IndexRepositoryResponse();
        $response->setPage($model->currentPage());
        $response->setPageSize($model->listRows());
        return $response;
    }
}
