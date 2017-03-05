<?php
namespace App\Http\Controllers\Api;

use Pails\Mvc\Controller;

abstract class ControllerBase extends Controller
{
    public function beforeExecuteRoute()
    {
        $this->response->setHeader('Access-Control-Allow-Headers', '*');
        $this->response->setHeader('Access-Control-Allow-Origin', '*');
        $this->response->setHeader('Access-Control-Allow-Methods', '*');
    }
}
