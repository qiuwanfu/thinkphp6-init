<?php
declare (strict_types = 1);

namespace app\controller\v1;

use app\BaseController;
use app\logic\user\v1\IndexLogic;
use app\logic\user\v1\request\IndexLogicRequest;
use Exception;
use think\exception\HttpResponseException;

class User extends BaseController
{
    /**
     * @throws Exception
     */
    public function index()
    {
        $request = new IndexLogicRequest();
        $request->setPage($this->request->get('page/d'));
        $request->setPageSize($this->request->get('pageSize/d'));
        $response = IndexLogic::execute($request);
        throw new HttpResponseException(json($response->toArray()));
    }

    public function save()
    {
        //
    }

    public function read($id)
    {
        //
    }

    public function update($id)
    {
        //
    }

    public function delete($id)
    {
        //
    }
}
