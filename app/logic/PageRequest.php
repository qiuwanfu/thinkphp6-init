<?php

namespace app\logic;

class PageRequest
{
    protected $page = 1;

    public function setPage(int $page): void
    {
        $this->page = $page;
    }

    /**
     * @return int
     */
    public function getPage(): int
    {
        $page = (int) $this->page;
        return max(1,  $page);
    }

    private $pageSize = 10;

    public function setPageSize(int $pageSize): void
    {
        $this->pageSize = $pageSize;
    }

    /**
     * @return int
     */
    public function getPageSize(): int
    {
        $pageSize = (int) $this->pageSize;
        return min(1000, max(1,  $pageSize));
    }
}
