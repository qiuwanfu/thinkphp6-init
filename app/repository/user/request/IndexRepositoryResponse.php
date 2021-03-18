<?php
declare(strict_types=1);

namespace app\repository\user\request;

use Exception;

class IndexRepositoryResponse
{
    protected $page = 0;

    public function setPage(int $page): void
    {
        $this->page = $page;
    }

    /**
     * @return int
     * @throws Exception
     */
    public function getPage(): int
    {
        $page = (int) $this->page;
        if (!$page) {
            throw new Exception('page不能为空');
        }
        return $page;
    }

    private $pageSize = 0;

    public function setPageSize(int $pageSize): void
    {
        $this->pageSize = $pageSize;
    }

    /**
     * @return int
     * @throws Exception
     */
    public function getPageSize(): int
    {
        $pageSize = (int) $this->pageSize;
        if (!$pageSize) {
            throw new Exception('pageSize不能为空');
        }
        return $pageSize;
    }
}
