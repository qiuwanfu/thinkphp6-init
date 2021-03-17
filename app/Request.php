<?php
namespace app;

// 应用请求对象类
class Request extends \think\Request
{
    protected $page;

    public function getPage(): int
    {
        return 1;
    }

    protected $pageSize;

    public function getPageSize(): int
    {

    }
}
