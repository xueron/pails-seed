<?php
/**
 * ApiControllerBase.php
 *
 */

namespace App\Controllers\Admin\Api;


abstract class ApiControllerBase extends \Pails\Mvc\Controller
{
    public function beforeExecuteRoute()
    {
        $this->response->setHeader('Access-Control-Allow-Headers', 'Origin, X-Requested-With, Content-Type, Accept');
        $this->response->setHeader('Access-Control-Allow-Origin', '*');
        $this->response->setHeader('Access-Control-Allow-Methods', 'POST, GET, OPTIONS');
    }

    public function success(array $data = [], array $meta = [])
    {
        return $this->response->setJsonContent(array_merge([
            "status" => true,
            "success" => true,
            "code" => 200,
            "msg" => "成功",
            "data" => $data
        ], $meta), JSON_UNESCAPED_UNICODE);
    }

    public function failure($code = 500, $msg = "系统错误", array $data = [], array $meta = [])
    {
        return $this->response->setJsonContent(array_merge([
            "status" => false,
            "success" => false,
            "code" => $code,
            "msg" => $msg,
            "data" => $data
        ], $meta), JSON_UNESCAPED_UNICODE);
    }

    public function errorNotFound()
    {
        return $this->failure(404, "数据不存在");
    }

    public function errorWrongParams()
    {
        return $this->failure(501, "参数格式不正确");
    }

    public function errorNeedLogin()
    {
        return $this->failure(502, "请先登录");
    }
}
