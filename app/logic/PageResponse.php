<?php
declare(strict_types=1);

namespace app\logic;

use Exception;

class PageResponse
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
    protected function getPage(): int
    {
        $page = (int)$this->page;
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
    protected function getPageSize(): int
    {
        $pageSize = (int)$this->pageSize;
        if (!$pageSize) {
            throw new Exception('pageSize不能为空');
        }
        return $pageSize;
    }

    protected $list = [];

    protected function getList(): array
    {
        return (array) $this->list;
    }

    /**
     * @return array
     * @throws Exception
     */
    public function toArray(): array
    {
        $pageInfo = [
            'page' => $this->getPage(),
            'pageSize' => $this->getPageSize(),
        ];
        return [
            'pageInfo' => $pageInfo,
            'list' => $this->getList(),
        ];
    }
}
