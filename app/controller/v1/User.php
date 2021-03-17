<?php
declare (strict_types = 1);

namespace app\controller\v1;

use app\logic\V1IndexUserLogic;
use think\Request;

class User
{
    public function index(V1IndexUserLogic $logic)
    {
        dd($logic->execute());
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
