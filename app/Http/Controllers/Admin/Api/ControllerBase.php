<?php
/**
 * ControllerBase.
 */
namespace App\Http\Controllers\Admin\Api;

use Pails\Mvc\Controller;

abstract class ControllerBase extends Controller
{
    public function afterExecuteRoute()
    {
        $this->response->setHeader('Access-Control-Allow-Headers', '*');
        $this->response->setHeader('Access-Control-Allow-Origin', '*');
        $this->response->setHeader('Access-Control-Allow-Methods', '*');
    }
}
