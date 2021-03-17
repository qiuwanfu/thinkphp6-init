<?php
namespace app;

// 应用请求对象类
class Request extends \think\Request
{
    /**
     * page
     * @return int
     */
    public function getPage(): int
    {
        return max(1,  $this->get('page'));
    }

    /**
     * pageSize
     * @return int
     */
    public function getPageSize(): int
    {
        return min(10000, max(1,  $this->get('pageSize')));
    }
}
