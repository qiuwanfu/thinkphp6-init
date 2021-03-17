<?php
declare (strict_types = 1);

namespace app\controller\v1;

use app\logic\user\v1\IndexLogic;
use app\logic\user\v1\request\IndexLogicRequest;

class User
{
    public function index(IndexLogic $logic, IndexLogicRequest $request)
    {
        $logic->execute($request);
    }

    public function save(Request $request)
    {
        //
    }

    public function read($id)
    {
        //
    }

    public function update(Request $request, $id)
    {
        //
    }

    public function delete($id)
    {
        //
    }
}
