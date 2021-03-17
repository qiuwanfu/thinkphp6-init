<?php
// +----------------------------------------------------------------------
// | 控制台配置
// +----------------------------------------------------------------------
use app\command\FacadeMake;
use app\command\LogicMake;
use app\command\RepositoryMake;

return [
    // 指令定义
    'commands' => [
        'make:facade' => FacadeMake::class,
        'make:repository' => RepositoryMake::class,
        'make:logic' => LogicMake::class,
    ],
];
